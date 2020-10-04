// Crie um formulario dentro de uma tag <form></form>.
// Não é necessário adicionar um botao de envio dos dados, pois é gerado automaticamente pelo script
// Não coloque id nos inputs
// Todos os campos tipo input e textarea serão enviados via ajax e podem ser recebidos no POST na mensagem
// Este script valída inputs que trabalham apenas com preenchimento de caracteres. Não valida radio ou checkbox.
// Opções gerais:
// frase_sucesso: Frase que informa que o email foi enviado com sucesso
// frase_erro: Frase que informa que um erro foi identificado
// frase_erro_campos : Frase que informa erro no preenchimento dos campos
// frase_erro_email : Frase que informa erros no preenhimento do campo email
// frase_enviar : Texto do botao de enviar
// classe_enviar : Classe css do botao de enviar
// path : Endereço url onde o POST será enviado
//
// É possível alterar qualquer uma das variaveis acima utilizando a sintaxe:
// barraProgresso.variavel = 'conteudo';
// É necessário que as alterações sejam feitas antes de inicializar o objeto.
// Para inicializar o objeto basta adicionar a chamada abaixo:
// barraProgresso.init();
// O processo de envio é feito através do evento abaixo:
// $("#enviar").click(function() {
//     barraProgresso.enviar();
// });
// O código css abaixo pode ser personalizado da forma que achar melhor
// <style>#informar_erro{width:100%;padding:10px;display:none}#informar_erro_email{width:100%;padding:10px;display:none}.input_erro{border:1px solid red}#barra_progresso #progresso{width:100%;background:#035c8a;width:0%;height:30px;color:#fff;letter-spacing:1px;font-size:12px;text-align:center}#barra_progresso{width:100%;border:1px solid #035C8A;padding:0px;display:none}#porcentagem{text-align:center;display:none}#aviso{text-align:center;display:none}._tr_long{-webkit-transition:all 3.5s;-moz-transition:all 3.5s;-ms-transition:all 3.5s;-o-transition:all 3.5s;transition:all 3.5s;}</style>
//
// Juntando todos os código necessários temos:
// <style>#informar_erro{width:100%;padding:10px;display:none}#informar_erro_email{width:100%;padding:10px;display:none}.input_erro{border:1px solid red}#barra_progresso #progresso{width:100%;background:#035c8a;width:0%;height:30px;color:#fff;letter-spacing:1px;font-size:12px;text-align:center}#barra_progresso{width:100%;border:1px solid #035C8A;padding:0px;display:none}#porcentagem{text-align:center;display:none}#aviso{text-align:center;display:none}._tr_long{-webkit-transition:all 3.5s;-moz-transition:all 3.5s;-ms-transition:all 3.5s;-o-transition:all 3.5s;transition:all 3.5s;}</style>
// <script src="assets/js/enviar-email.js"></script>
// <script type="text/javascript">
// 		$("#enviar").click(function() {
//     		barraProgresso.enviar();
// 		});
// 		barraProgresso.init();
// </script>
//Basta adicionar o script acima após o seu <form></form>.

var barraProgresso = {
	campos : [],
	contador :  0,
	limite :  50,
	frase_sucesso: 'Email enviado com sucesso.',
	frase_erro: 'Ocorreu um erro ao enviar o email, tente novamente mais tarde.',
	frase_erro_campos : 'Preencha todos os campos em vermelho',
	frase_erro_email : 'Insira um email válido',
	frase_enviar : 'enviar',
	classe_enviar : '',
	path : 'ajax/ajax.php',
	enviar(){		
		this.resetErro();
		this.resetBarra();
		$("#aviso").empty();
		var erro = false;
		for (i = 0; i < this.campos.length; i++) { 
			if($("#"+this.campos[i]).val() === '' && $("#"+this.campos[i]).attr("type") != 'radio' && $("#"+this.campos[i]).attr("type") != 'checkbox'){
				$("#"+this.campos[i]).addClass("input_erro");
				erro = true;
				$("#informar_erro").css("display","block");
			}
			if(this.campos[i] === 'email'){
				var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

				if(!re.test($("#"+this.campos[i]).val())){
					$("#"+this.campos[i]).addClass("input_erro");
					erro = true;
					$("#informar_erro_email").css("display","block");
				}
			}
		}
		//erro = false;
		if(!erro){
			$("#barra_progresso").fadeIn("200");
			$("#porcentagem").fadeIn("200");
			$("#aviso").fadeIn("200");
			$("#enviar").fadeOut(0);
			$("#progresso").empty();
			$("#progresso").css("width","0%");
			setTimeout('barraProgresso.avancarBarraPorcentagem(0,50);',1000);
			var campos_post = 'acao=email&';
			for (i = 0; i < this.campos.length; i++) { 
				campos_post = campos_post.concat(this.campos[i]);
				campos_post = campos_post.concat('=');
				campos_post = campos_post.concat($("#"+this.campos[i]).val());

				if( i < this.campos.length - 1)
					campos_post = campos_post.concat('&');
			}	
		    $.ajax({
		        type: 'post',
		        data: campos_post,
		        url: this.path,
		        success: function(retorno){
		        	console.log("Return of ajax: "+retorno);
		            if(retorno == 1 ){
		            	setTimeout('barraProgresso.contador = 50; barraProgresso.limite = 100;',4001);
		               	setTimeout('barraProgresso.avancarBarraPorcentagem(50,100)',4010);
		               	setTimeout('$("#aviso").html(barraProgresso.frase_sucesso);',7001);
		            }
		            else{
		            	//$("#progresso").css("width","100%");
		               	setTimeout('$("#aviso").html("Ocorreu um erro ao enviar o email, tente novamente mais tarde.");$("#enviar").fadeIn(0);',5000);
		               	this.contador = 0; 
		               	this.limite = 50;
		               
		            }
		        }
		    });
		}
	},
	avancarBarraPorcentagem(inicio,fim){
		for( i = inicio ; i <= fim; i++ ){
			$("#progresso").css("width",i+"%");	
		}
		this.contagem();
	},
	contagem(){
		if( this.contador <= this.limite){
			$("#porcentagem").html(this.contador+"%");
			this.contador = this.contador + 1;
			setTimeout('barraProgresso.contagem();',50);
		}
	},
	resetErro(){
		$("#informar_erro_email").css("display","none");
		$("#informar_erro").css("display","none");
		for (i = 0; i < this.campos.length; i++) { 
			$("#"+this.campos[i]).removeClass("input_erro");
		}
	},
	resetBarra(){
		this.contador = 0;
		this.limite = 50;
		$("#progresso").fadeOut();
		$("#progresso").removeClass("_tr_long");
		$("#porcentagem").html("0%");
		setTimeout('$("#progresso").css("width","0%");',100);
		setTimeout('$("#progresso").addClass("_tr_long");$("#progresso").fadeIn()',200);
	},
	init(){
		this.getNames();
		$("form").prepend('<span id="informar_erro">* '+this.frase_erro_campos+'</span><span id="informar_erro_email">* '+this.frase_erro_email+'</span>');
		$("form").after().append('<span class="'+this.classe_enviar+'" id="enviar">'+this.frase_enviar+'</span><div id="barra_progresso"><div class="_tr_long" id="progresso"></div></div><div class="_tr" id="porcentagem">0%</div><div id="aviso"></div>');
	},
	getNames(){
		var names = $("form input");

		for (var i = 0; i < names.length; i++) {
			var item_names =names[i];
			this.campos[i] = item_names.name;
			item_names.setAttribute("id",item_names.name);
		}
		var names = $("form textarea");
		var last = i;
		for (var i = 0; i < names.length; i++) {
			var item_names =names[i];
			this.campos[last] = item_names.name;
			item_names.setAttribute("id",item_names.name);
			last++;
		}
	}

}