
<?php
	class Paginas {

		# Variáveis
		public $tabela, $titulo, $campoID, $campos, $aviso = false;

		# Paginas do Menu
		public $paginas_menu = array(
			array('Home','banner_home','sobre_home','servicos_itens',array('Projetos','projetos_home','projetos_itens_home'),'porque_escolher','parceiros'),
			'contato',
			array('Projetos','projetos','projetos_edificios','projetos_empresarial','projetos_residencial'),			
			array('Rodapé','contato_rodape','redes_sociais'),
			'seo',
			array('Serviços','servicos','servicos_equipe','servicos_equipe_itens','servicos_itens'),
			array('Sobre','sobre','sobre_banners'),
			array('Projetos dos clientes','status_projeto','status_projeto_noticias','status_projetos_imagens')
		);

		# Páginas
		function __construct($pagina){

			switch($pagina):

				# case 'nome_da_tabela':
				# 	$this->tabela = "nome_da_tabela";
				# 	$this->titulo = "Titulo da Tabela";
				# 	$this->campoID = "id";
				#	$this->aviso = array("alerta(sucesso/erro)","Mensagem");
				#	$this->operacoes = array('inserir','listar','editar','deletar');
				#	$this->listar = array('id','campo01','campo02','campo03','select'=>array('tabela','titulo','id'),'acao'=>array('editar'));
				# 	$this->campos = array(
				# 		"input (text)" => array('Nome do Campo:','input',255,'Texto','type'),
				# 		"select" => array('Nome do Campo:','select','tabela','id','nome')
				#       "select-multi" => array('Nome do Campo:','select','tabela','id','nome',true),
				# 		"upload-imagem" => array('Logotipo','upload-img','../assets/images/',200,200),
				#		"upload-arquivo" => array('Titulo do Campo','upload-file','../assets/images/'),
				#		"textarea" => array('Titulo do Campo','textarea',1000(ou false=infinito),'Texto'),
				#		"data" => array('Titulo do Campo','date','Texto'),
				#		"radiobutton" => array('Nome do Campo:','radio', array('','0' => 'Opção 1', '1' => 'Opção 2', '2' => 'Opção 3', ... )),
				#		"imagem" => array('Imagem','upload-img','../assets/images/',false,false,'thumb'=>array(270,270,'../assets/images/','thumb'))
				# 	);
				# break;

			case 'banner_home':
				$this->titulo = "Banners";
				$this->tabela = "banner_home";
				$this->campoID = "id";
				$this->operacoes = array( 'inserir','listar','editar','deletar');
				$this->listar = array('id','imagem','titulo','texto','link','acao'=>array('editar','deletar'));
				$this->campos = array(
					"imagem" => array('Imagem','upload-img','../assets/images/',false,false),
					"titulo" => array('Titulo','input',255,'Titulo','Titulo'),
					"texto" => array('Texto','textarea',1000,'Texto'),
					"link" => array('Link','input',255,'Link','Link')
				);
			break;

			case 'contato':
				$this->titulo = "Contato";
				$this->tabela = "contato";
				$this->campoID = "id";
				$this->operacoes = array( 'listar','editar');
				$this->listar = array('id','titulo','endereco','mapa','email_destino','acao'=>array('editar'));
				$this->campos = array(
					"titulo" => array('Titulo','input',255,'Titulo','Titulo'),
					"endereco" => array('Endereço','input',255,'Endereço','Endereço'),
					"mapa" => array('Mapa','input',255,'Mapa','Mapa'),
					"email_destino" => array('Email Destino','input',255,'Email Destino','Email Destino')
				);
			break;

			case 'contato_rodape':
				$this->titulo = "Contato";
				$this->tabela = "contato_rodape";
				$this->campoID = "id";
				$this->operacoes = array('listar','editar');
				$this->listar = array('id','endereco','telefone','acao'=>array('editar'));
				$this->campos = array(
					"endereco" => array('Endereço','input',255,'Endereço','Endereço'),
					"telefone" => array('Telefone','input',255,'Telefone','Telefone')
				);
			break;

			case 'parceiros':
				$this->titulo = "Parceiros";
				$this->tabela = "parceiros";
				$this->campoID = "id";
				$this->operacoes = array( 'inserir','listar','editar','deletar');
				$this->listar = array('id','imagem','nome','link','acao'=>array('editar','deletar'));
				$this->campos = array(
					"imagem" => array('Imagem','upload-img','../assets/images/',false,false),
					"nome" => array('Nome','input',255,'Nome','Nome'),
					"link" => array('Link','input',255,'Link','Link')
				);
			break;

			case 'porque_escolher':
				$this->titulo = "Porque Escolher";
				$this->tabela = "porque_escolher";
				$this->campoID = "id";
				$this->operacoes = array( 'listar','editar');
				$this->listar = array('id','titulo','item1','item2','item3','acao'=>array('editar'));
				$this->campos = array(
					"titulo" => array('Titulo','input',255,'Titulo','Titulo'),
					"item1" => array('Titulo','input',255,'Titulo','Titulo'),
					"item2" => array('Titulo','input',255,'Titulo','Titulo'),
					"item3" => array('Titulo','input',255,'Titulo','Titulo')
				);
			break;

			case 'projetos':
				$this->titulo = "Texto";
				$this->tabela = "projetos";
				$this->campoID = "id";
				$this->operacoes = array( 'listar','editar');
				$this->listar = array('id','titulo','texto','acao'=>array('editar'));
				$this->campos = array(
					"titulo" => array('Titulo','input',255,'Titulo','Titulo'),
					"texto" => array('Texto','textarea',1000,'Texto')
				);
			break;

			case 'projetos_edificios':
				$this->titulo = "Edificios";
				$this->tabela = "projetos_edificios";
				$this->campoID = "id";
				$this->operacoes = array( 'inserir','listar','editar','deletar');
				$this->listar = array('id','imagem','descricao','acao'=>array('editar','deletar'));
				$this->campos = array(
					"imagem" => array('Imagem','upload-img','../assets/images/',false,false),
					"descricao" => array('Descrição','input',255,'Descrição','Descrição')
				);
			break;

			case 'projetos_empresarial':
				$this->titulo = "Empresarial";
				$this->tabela = "projetos_empresarial";
				$this->campoID = "id";
				$this->operacoes = array( 'listar','editar');
				$this->listar = array('id','imagem','descricao','cliente','acao'=>array('editar'));
				$this->campos = array(
					"imagem" => array('Imagem','upload-img','../assets/images/',false,false),
					"descricao" => array('Descrição','input',255,'Descrição','Descrição'),
					"cliente" => array('Cliente','input',255,'Cliente','Cliente')
				);
			break;

			case 'projetos_home':
				$this->titulo = "Projetos Home";
				$this->tabela = "projetos_home";
				$this->campoID = "id";
				$this->operacoes = array( 'listar','editar');
				$this->listar = array('id','titulo','texto','imagem_lateral','acao'=>array('editar'));
				$this->campos = array(
					"titulo" => array('Titulo','input',255,'Titulo','Titulo'),
					"texto" => array('Texto','textarea',1000,'Texto'),
					"imagem_lateral" => array('Imagem','upload-img','../assets/images/',false,false)
				);
			break;

			case 'projetos_itens_home':
				$this->titulo = "Imagens Projetos";
				$this->tabela = "projetos_itens_home";
				$this->campoID = "id";
				$this->operacoes = array( 'inserir','listar','editar','deletar');
				$this->listar = array('id','imagem','descricao','acao'=>array('editar','deletar'));
				$this->campos = array(
					"imagem" => array('Imagem','upload-img','../assets/images/',false,false),
					"descricao" => array('Descrição','input',255,'Descrição','Descrição')
				);
			break;

			case 'projetos_residencial':
				$this->titulo = "Residencial";
				$this->tabela = "projetos_residencial";
				$this->campoID = "id";
				$this->operacoes = array( 'inserir','listar','editar','deletar');
				$this->listar = array('id','imagem','descricao','cliente','acao'=>array('editar','deletar'));
				$this->campos = array(
					"imagem" => array('Imagem','upload-img','../assets/images/',false,false),
					"descricao" => array('Descricao','input',255,'Descricao','Descricao')
				);
			break;

			case 'redes_sociais':
				$this->titulo = "Redes Sociais";
				$this->tabela = "redes_sociais";
				$this->campoID = "id";
				$this->operacoes = array( 'listar','editar');
				$this->listar = array('id','facebook','facebook_titulo','instagran','instagran_titulo','google_mais','google_mais_titulo','acao'=>array('editar'));
				$this->campos = array(
					"facebook" => array('Facebook','input',255,'Facebook','Facebook'),
					"facebook_titulo" => array('Descrição','input',255,'Descrição','Descrição'),
					"instagran" => array('Instagran','input',255,'Instagran','Instagran'),
					"instagran_titulo" => array('Descrição','input',255,'Descrição','Descrição'),
					"google_mais" => array('Google +','input',255,'Google +','Google +'),
					"google_mais_titulo" => array('Descrição','input',255,'Descrição','Descrição')
				);
			break;

			case 'seo':
				$this->titulo = "SEO";
				$this->tabela = "seo";
				$this->campoID = "id";
				$this->operacoes = array( 'listar','editar');
				$this->listar = array('id','keywords','titulo_site','descricao_site','imagem_facebook','acao'=>array('editar'));
				$this->campos = array(
					"keywords" => array('Titulo','input',255,'Titulo','Titulo'),
					"titulo_site" => array('Titulo','input',255,'Titulo','Titulo'),
					"descricao_site" => array('Titulo','input',255,'Titulo','Titulo'),
					"imagem_facebook" => array('Imagem','upload-img','../assets/images/',200,200)
				);
			break;

			case 'servicos':
				$this->titulo = "Texto";
				$this->tabela = "servicos";
				$this->campoID = "id";
				$this->operacoes = array('listar','editar');
				$this->listar = array('id','titulo','texto','acao'=>array('editar'));
				$this->campos = array(
					"titulo" => array('Titulo','input',255,'Titulo','Titulo'),
					"texto" => array('texto','textarea',false,'Texto')
				);
			break;

			case 'servicos_equipe':
				$this->titulo = "Equipes";
				$this->tabela = "servicos_equipe";
				$this->campoID = "id";
				$this->operacoes = array( 'listar','editar');
				$this->listar = array('id','titulo_vertical','titulo2','texto','acao'=>array('editar'));
				$this->campos = array(
					"titulo_vertical" => array('Titulo','input',255,'Titulo','Titulo'),
					"titulo2" => array('Titulo','input',255,'Titulo','Titulo'),
					"texto" => array('Texto','textarea',false,'Texto')
				);
			break;

			case 'servicos_equipe_itens':
				$this->titulo = "Imagens Equipe";
				$this->tabela = "servicos_equipe_itens";
				$this->campoID = "id";
				$this->operacoes = array( 'inserir','listar','editar','deletar');
				$this->listar = array('id','imagem','descricao','acao'=>array('editar','deletar'));
				$this->campos = array(
					"imagem" => array('Imagem','upload-img','../assets/images/',false,false),
					"descricao" => array('Descrição','input',255,'Descrição','Descrição')
				);
			break;

			case 'servicos_itens':
				$this->titulo = "Imagens Serviços";
				$this->tabela = "servicos_itens";
				$this->campoID = "id";
				$this->operacoes = array( 'inserir','listar','editar','deletar');
				$this->listar = array('id','imagem','titulo','texto','acao'=>array('editar','deletar'));
				$this->campos = array(
					"imagem" => array('Imagem','upload-img','../assets/images/',false,false),
					"titulo" => array('Titulo','input',255,'Titulo','Titulo'),
					"texto" => array('Texto','textarea',false,'Texto')
				);
			break;

			case 'sobre':
				$this->titulo = "Textos";
				$this->tabela = "sobre";
				$this->campoID = "id";
				$this->operacoes = array( 'listar','editar');
				$this->listar = array('id','titulo','acao'=>array('editar'));
				$this->campos = array(
					"titulo" => array('Titulo','input',255,'Titulo','Titulo'),
					"texto" => array('Texto','textarea',false,'Texto'),
					"assinatura" => array('Titulo','input',255,'Titulo','Titulo'),
					"imagem" => array('Imagem','upload-img','../assets/images/',false,false),
					"titulo_nossa_empresa" => array('Titulo','input',255,'Titulo','Titulo'),
					"texto_nossa_empresa" => array('Texto','textarea',false,'Texto'),
					"titulo_missao" => array('Titulo','input',255,'Titulo','Titulo'),
					"texto_missao" => array('Texto','textarea',false,'Texto'),
					"titulo_visao" => array('Titulo','input',255,'Titulo','Titulo'),
					"texto_visao" => array('Texto','textarea',false,'Texto'),
					"titulo_valores" => array('Titulo','input',255,'Titulo','Titulo'),
					"texto_valores" => array('Texto','textarea',false,'Texto')
				);
			break;

			case 'sobre_banners':
				$this->titulo = "Banners";
				$this->tabela = "sobre_banners";
				$this->campoID = "id";
				$this->operacoes = array( 'inserir','listar','editar','deletar');
				$this->listar = array('id','imagem','descricao','link','acao'=>array('editar','deletar'));
				$this->campos = array(
					"imagem" => array('Imagem','upload-img','../assets/images/',false,false),
					"descricao" => array('Descrição','input',255,'Descrição','Descrição'),
					"link" => array('Link','input',255,'Link','Link')
				);
			break;

			case 'sobre_home':
				$this->titulo = "Sobre";
				$this->tabela = "sobre_home";
				$this->campoID = "id";
				$this->operacoes = array('listar','editar');
				$this->listar = array('id','titulo','texto','projetos','clientes','parceiros','premios','acao'=>array('editar'));
				$this->campos = array(
					"titulo" => array('Titulo','input',255,'Titulo','Titulo'),
					"texto" => array('Texto','textarea',false,'Texto'),
					"projetos" => array('Projetos','input',255,'Projetos','Projetos'),
					"clientes" => array('Clientes','input',255,'Clientes','Clientes'),
					"parceiros" => array('Parceiros','input',255,'Titulo','Titulo'),
					"premios" => array('Prêmios','input',255,'Prêmios','Prêmios')
				);
			break;

			case 'status_projeto':
				$this->titulo = "Projetos do Clientes";
				$this->tabela = "status_projeto";
				$this->campoID = "id";
				$this->operacoes = array( 'inserir','listar','editar','deletar');
				$this->listar = array('id','login','senha','nome','status','texto','acao'=>array('editar','deletar'));
				$this->campos = array(
					"login" => array('Login','input',255,'Login','Login'),
					"senha" => array('Senha','input',255,'Senha','Senha'),
					"nome" => array('Nome','input',255,'Nome','Nome'),
					"status" => array('Status','input',255,'Status','Status'),
					"texto" => array('Texto','textarea',false,'Texto')
				);
			break;

			case 'status_projeto_noticias':
				$this->titulo = "Noticias";
				$this->tabela = "status_projeto_noticias";
				$this->campoID = "id";
				$this->operacoes = array( 'inserir','listar','editar','deletar');
				$this->listar = array('id','id_user'=>array('status_projeto','nome','id'),'noticia','texto','acao'=>array('editar','deletar'));
				$this->campos = array(
					"id_user" => array('Cliente:','select','status_projeto','id','nome'),
					"noticia" => array('Notícia','input',255,'Notícia','Notícia'),
					"texto" => array('Texto','textarea',false,'Texto')
				);
			break;

			case 'status_projetos_imagens':
				$this->titulo = "Imagens";
				$this->tabela = "status_projetos_imagens";
				$this->campoID = "id";
				$this->operacoes = array( 'inserir','listar','editar','deletar');
				$this->listar = array('id','id_user'=>array('status_projeto','nome','id'),'imagem','acao'=>array('editar','deletar'));
				$this->campos = array(
					"id_user" => array('Clientes:','select','status_projeto','id','nome'),
					"imagem" => array('Imagem','upload-img','../assets/images/',false,false)
				);
			break;

			endswitch;
		}
	}
?>