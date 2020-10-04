// barraProgresso.init();
// barraProgresso.frase_sucesso = 'Email enviado com sucesso.';
// barraProgresso.frase_erro = 'Ocorreu um erro ao enviar o email, tente novamente mais tarde.';
// //id dos campos cuja validação será verificada
// barraProgresso.campos =["nome","email","assunto","mensagem"];

// $("#enviar").click(function() {
// 	barraProgresso.enviar();
// });



//$(document).ready(function(){modal("sucesso","Salvar categoria","Categoria salva com sucesso!","Fechar","'.$base.'/home");});
//$(document).ready(function(){modal("erro","Salvar categoria","Ocorreu um erro ao salvar a categoria, tente novamente mais tarde!","Fechar","'.$base.'/home");});


// $(document).ready(function(){
//   $('.date').mask('00/00/0000',{placeholder: "__/__/____",selectOnFocus: true});
//   $('.time').mask('00:00:00');
//   $('.date_time').mask('00/00/0000 00:00:00');
//   $('.cep').mask('00000-000');
//   $('.phone').mask('0000-0000');
//   $('.phone_with_ddd').mask('(00) 0000-0000');
//   $('.phone_us').mask('(000) 000-0000');
//   $('.mixed').mask('AAA 000-S0S');
//   $('.cpf').mask('000.000.000-00', {reverse: true});
//   $('.money').mask('000.000.000.000.000,00', {reverse: true});
//   $('.money2').mask("#.##0,00", {reverse: true});
//   $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
//     translation: {
//       'Z': {
//         pattern: /[0-9]/, optional: true
//       }
//     }
//   });
//   $('.ip_address').mask('099.099.099.099');
//   $('.percent').mask('##0,00%', {reverse: true});
//   $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
//   $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
//   $('.fallback').mask("00r00r0000", {
//       translation: {
//         'r': {
//           pattern: /[\/]/, 
//           fallback: '/'
//         }, 
//         placeholder: "__/__/____"
//       }
//     });
//   $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
// });

// FUNCAO JANELA MODAL
// url = "";
// function modal(tipo,titulo,texto,botao,url2){
// 	if(tipo=='sucesso'){
// 		var classe = 'sucesso';
// 		var classe2 = 'sucesso';
// 	}else if(tipo=='erro'){
// 		var classe = 'erro';
// 		var classe2 = 'erro';
// 	}
// 	var cssModal = '<style>.modal,.overlay-modal{position:absolute;background:#FFF}.overlay-modal{width:100%;height:100%;float:left;opacity:.7;z-index:999}.modal{z-index:9999;width:400px;border:1px solid #CCC;left:50%;top:50%;margin-top:-200px;margin-left:-200px;font-family:"Josefin Sans";font-weight:400;font-size:20px}.modal .head{width:100%;padding:10px 0;text-align:center}.modal .texto{padding:10px}.modal .botao{width:380px;margin:20px 10px 10px;padding:10px 0;text-align:center;cursor:pointer;transition:all .3s ease}.modal .botao,.modal .botao:hover{-webkit-transition:all .3s ease;-moz-transition:all .3s ease;-ms-transition:all .3s ease;-o-transition:all .3s ease}.modal .botao:hover{opacity:.7;transition:all .3s ease}.modal .sucesso{background:#14ad00;color:#FFF}.modal .erro{background:red;color:#FFF}</style>';
// 	var htmlModal = '<div class="overlay-modal" id="overlay-modal"></div><div class="modal"><div class="head '+classe+'">'+titulo+'</div><div class="texto">'+texto+'</div><div class="botao '+classe2+'" id="modal-fechar">'+botao+'</div></div>';
// 	var htmlTotal = cssModal+htmlModal;

// 	$('body').prepend(htmlTotal);
// 	url = url2;
// }
// $(document).ready(function(){
// 	$("body").on("click","#modal-fechar",function(){
// 		$(".overlay-modal").fadeOut("fast");
// 		$(".modal").fadeOut("fast");
// 		setTimeout(function(){
// 			window.location = url;
// 		},1);
// 	});
// });

// $(".info").hover(function(){
// 	$(this).find(".texto_info").fadeIn(200);
// }, function(){
// 	$(this).find(".texto_info").fadeOut(200);
// });

//	Tooltip
// $(document).ready(function() {
//     $('.tooltip').tooltipster({
//        animation: 'fade',
//        delay: 200,
//        theme: 'tooltipster-default',
//        touchDevices: false,
//        trigger: 'hover',
//        position: 'right',
//     });
// });

// jQuery.validator.setDefaults({
//   debug: true,
//   success: "valid"
// });
// $( "#myform" ).validate({
//   rules: {
//     field: {
//       required: true
//     }
//   }
// });

// $(function(){
	// Responsive Navigation
  	// var nav = responsiveNav("header nav", { closeOnNavClick:true });

// });

//Popup
// $(document).on('keyup',function(evt) {
//     if (evt.keyCode == 27) {
// 		$("#popup").fadeOut("200");
// 		$("#telaToda").fadeOut("200");
// 		$("body").css("overflow","");
//     }
// });

// $("#abrirPopup").click(function() {
// 	$("#telaToda").fadeIn("200");
// 	$("#popup").fadeIn("200");
// 	$("body").css("overflow","hidden");
// });
// $("#fecharPopup").click(function() {
// 	$("#popup").fadeOut("200");
// 	$("#telaToda").fadeOut("200");
// 	$("body").css("overflow","");
// });
// $("#telaToda").click(function() {
// 	$("#telaToda").fadeOut("200");
// 	$("#popup").fadeOut("200");
// 	$("body").css("overflow","");
// });


//Carousel Simples
// $('.owl-carousel').owlCarousel({
    
//     margin:10,
//     nav:false,
//     dots: true,
//     autoplay: true,
//     loop:true,
//     responsive:{
//         0:{
//             items:1
//         },
//         100:{
//             items:1
//         },
//         200:{
//             items:1
//         }
//     }
// })



    //Carousel com botões
// $(document).ready(function() {
 
//     $("#owl-demo").owlCarousel({
//     items : 5,
//     lazyLoad : true,
//     nav:false,
//     dots:false
//     }); 


//     var owl = $('.owl-carousel');
//     owl.owlCarousel();
//     // Go to the next item
//     $('.customNextBtn').click(function() {
//         owl.trigger('next.owl.carousel');
//     })
//     // Go to the previous item
//     $('.customPrevBtn').click(function() {
//         // With optional speed parameter
//         // Parameters has to be in square bracket '[]'
//         owl.trigger('prev.owl.carousel', [500]);
//     })
     
// });
 


// Isotope
// //$( function() {
//   // init Isotope
  
//   $(window).load(function(){
//   var $container = $('.isotope').isotope({
//     itemSelector: '.element-item',
//     layoutMode: 'fitRows'
//   });
//   // filter functions
//   var filterFns = {
//     // show if number is greater than 50
//     numberGreaterThan50: function() {
//       var number = $(this).find('.number').text();
//       return parseInt( number, 10 ) > 50;
//     },
//     // show if name ends with -ium
//     ium: function() {
//       var name = $(this).find('.name').text();
//       return name.match( /ium$/ );
//     }
//   };
//   // bind filter button click
//   $('#filters').on( 'click', 'li', function() {
//     var filterValue = $( this ).attr('data-filter');
//     // use filterFn if matches value
//     filterValue = filterFns[ filterValue ] || filterValue;
//     $container.isotope({ filter: filterValue });
//   });
//   // change is-checked class on buttons
//   $('.button-group').each( function( i, buttonGroup ) {
//     var $buttonGroup = $( buttonGroup );
//     $buttonGroup.on( 'click', 'li', function() {
//       $buttonGroup.find('.is-checked').removeClass('is-checked');
//       $( this ).addClass('is-checked');
//       $( this ).addClass('ativo');
//     });
//   });
  
// });



//Carousel vertical
// $( '#carousel' ).elastislide( {
//     orientation : 'vertical',
//     minItems : 3,
//     nav:true
// } );

// // jQuery
// var $container = $('#container');
// // init
// $container.isotope({
// // options
//     itemSelector: '.item',
//     layoutMode: 'fitRows'
// });            



//Slider    
// $(".bxslider").bxSlider({
//   mode: "fade",
//   captions: true,
// });


// NEON TEMA
// var responsiveHelper;
// var breakpointDefinition = {
//     tablet: 1024,
//     phone : 480
// };
// var tableContainer;

//     jQuery(document).ready(function($)
//     {
//         tableContainer = $("#table-1");
        
//         tableContainer.dataTable({
//             "sPaginationType": "bootstrap",
//             "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
//             "bStateSave": true,
            

//             // Responsive Settings
//             bAutoWidth     : false,
//             fnPreDrawCallback: function () {
//                 // Initialize the responsive datatables helper once.
//                 if (!responsiveHelper) {
//                     responsiveHelper = new ResponsiveDatatablesHelper(tableContainer, breakpointDefinition);
//                 }
//             },
//             fnRowCallback  : function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
//                 responsiveHelper.createExpandIcon(nRow);
//             },
//             fnDrawCallback : function (oSettings) {
//                 responsiveHelper.respond();
//             }
//         });
        
//         $(".dataTables_wrapper select").select2({
//             minimumResultsForSearch: -1
//         });
//     });


//Tabelas de busca

// var responsiveHelper;
// var breakpointDefinition = {
//     tablet: 1024,
//     phone : 480
// };
// var tableContainer;

//     jQuery(document).ready(function($)
//     {
//         tableContainer = $("#table-1");
        
//         tableContainer.dataTable({
//             "sPaginationType": "bootstrap",
//             "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
//             "bStateSave": true,
            

//             // Responsive Settings
//             bAutoWidth     : false,
//             fnPreDrawCallback: function () {
//                 // Initialize the responsive datatables helper once.
//                 if (!responsiveHelper) {
//                     responsiveHelper = new ResponsiveDatatablesHelper(tableContainer, breakpointDefinition);
//                 }
//             },
//             fnRowCallback  : function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
//                 responsiveHelper.createExpandIcon(nRow);
//             },
//             fnDrawCallback : function (oSettings) {
//                 responsiveHelper.respond();
//             }
//         });
        
//         $(".dataTables_wrapper select").select({
//             minimumResultsForSearch: -1
//         });
//     });


// $(document).ready(function(){
//         $("#frame").load(function(){
//             // var teste = $("#frame").contents().find("#input_teste").val();
//             // console.log(teste);
//              $("#frame").contents().find(".ouvir-audio").click(function(){
//                 $(".jp-pause").click();
//             });;
//         });;
            
// });

	//Script de refresh automatico de conteudo
	// var cont = 0;//Inicia o contador em 0 (Default)
	// var limit = 10;//Limite máximo de refreshs que serão executados
	// var intervalo = 1000;//Define o intervalo de execução dos refreshs
	// var url = 'ajax/ajax.php';//Define a url do arquivo acessado
	// var data = 'acao=acao\&id=id';//Define os dados que serão enviados
	// var retorno = '#content';//Define onde será acrescentado o retorno do ajax
	// var acao = new Array(true,false,false);//posição 1: true->acrecenta no final||posição 2: true->acrecenta no inicio||posição 3: true->limpa o conteudo antes de acrescentar
	// //Inicia os refreshs
	// function startRefresh(){
 //    	setTimeout("refresh();",intervalo);
	// }
	// //Função recursiva que realiza as chamadas
	// function refresh() {
	// 	$.ajax({
	//         type: 'post',
	//         data: data,
	//         url: url,
	//         success: function(retorno){
	//             if(retorno){
	//                 //Faz alguma ação com o retorno
	//                 if(acao[2])
	//                 	$("#content").empty();
	//                 if(acao[1])
	//                 	$("#content").prepend(retorno);
	//                 if(acao[0])
	//                 	$("#content").append(retorno);
	//             }
	//         }
	//     });
	//     //Verifica se ja atingiu o limite de execuções
	// 	if(cont < limit){
	// 		cont = cont + 1;//Incrementa o contador
	// 		setTimeout("refresh();",intervalo);//Realiza a recursão
	// 	}
	// }


	//Carrega conteudo quando chega ao fimda pagina
	// $(window).scroll(function()
	// {   
	//     console.log($(document).height() - $(window).height());
	//     console.log($(window).scrollTop() );
	//     if($(window).scrollTop() >= ($(document).height() - $(window).height()) -100  )
	//     {   

	//         //alert("fim da página");
	//         $("#loader").append('<div class=" grid-12-desktop grid-12-laptop grid-12-tablet grid-12-phone loader"><center><img src="assets/images/loader.gif" class=""/></center></div>');
	//         $.ajax({
	//             type: 'post',
	//             data: 'acao=acao',
	//             url:'ajax/ajax.php',
	//             success: function(retorno){
	//                 if(retorno){
	//                     $(".loader").remove();
	//                     $("#content").append(retorno);                    
	//                 }
	//                 else{

	//                 }
	//             }
	//         });
	        
	//     }
	// });
/*! WOW - v1.1.3 - 2016-05-06
* Copyright (c) 2016 Matthieu Aussaguel;*/
(function(){var a,b,c,d,e,f=function(a,b){return function(){return a.apply(b,arguments)}},g=[].indexOf||function(a){for(var b=0,c=this.length;c>b;b++)if(b in this&&this[b]===a)return b;return-1};b=function(){function a(){}return a.prototype.extend=function(a,b){var c,d;for(c in b)d=b[c],null==a[c]&&(a[c]=d);return a},a.prototype.isMobile=function(a){return/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(a)},a.prototype.createEvent=function(a,b,c,d){var e;return null==b&&(b=!1),null==c&&(c=!1),null==d&&(d=null),null!=document.createEvent?(e=document.createEvent("CustomEvent"),e.initCustomEvent(a,b,c,d)):null!=document.createEventObject?(e=document.createEventObject(),e.eventType=a):e.eventName=a,e},a.prototype.emitEvent=function(a,b){return null!=a.dispatchEvent?a.dispatchEvent(b):b in(null!=a)?a[b]():"on"+b in(null!=a)?a["on"+b]():void 0},a.prototype.addEvent=function(a,b,c){return null!=a.addEventListener?a.addEventListener(b,c,!1):null!=a.attachEvent?a.attachEvent("on"+b,c):a[b]=c},a.prototype.removeEvent=function(a,b,c){return null!=a.removeEventListener?a.removeEventListener(b,c,!1):null!=a.detachEvent?a.detachEvent("on"+b,c):delete a[b]},a.prototype.innerHeight=function(){return"innerHeight"in window?window.innerHeight:document.documentElement.clientHeight},a}(),c=this.WeakMap||this.MozWeakMap||(c=function(){function a(){this.keys=[],this.values=[]}return a.prototype.get=function(a){var b,c,d,e,f;for(f=this.keys,b=d=0,e=f.length;e>d;b=++d)if(c=f[b],c===a)return this.values[b]},a.prototype.set=function(a,b){var c,d,e,f,g;for(g=this.keys,c=e=0,f=g.length;f>e;c=++e)if(d=g[c],d===a)return void(this.values[c]=b);return this.keys.push(a),this.values.push(b)},a}()),a=this.MutationObserver||this.WebkitMutationObserver||this.MozMutationObserver||(a=function(){function a(){"undefined"!=typeof console&&null!==console&&console.warn("MutationObserver is not supported by your browser."),"undefined"!=typeof console&&null!==console&&console.warn("WOW.js cannot detect dom mutations, please call .sync() after loading new content.")}return a.notSupported=!0,a.prototype.observe=function(){},a}()),d=this.getComputedStyle||function(a,b){return this.getPropertyValue=function(b){var c;return"float"===b&&(b="styleFloat"),e.test(b)&&b.replace(e,function(a,b){return b.toUpperCase()}),(null!=(c=a.currentStyle)?c[b]:void 0)||null},this},e=/(\-([a-z]){1})/g,this.WOW=function(){function e(a){null==a&&(a={}),this.scrollCallback=f(this.scrollCallback,this),this.scrollHandler=f(this.scrollHandler,this),this.resetAnimation=f(this.resetAnimation,this),this.start=f(this.start,this),this.scrolled=!0,this.config=this.util().extend(a,this.defaults),null!=a.scrollContainer&&(this.config.scrollContainer=document.querySelector(a.scrollContainer)),this.animationNameCache=new c,this.wowEvent=this.util().createEvent(this.config.boxClass)}return e.prototype.defaults={boxClass:"wow",animateClass:"animated",offset:0,mobile:!0,live:!0,callback:null,scrollContainer:null},e.prototype.init=function(){var a;return this.element=window.document.documentElement,"interactive"===(a=document.readyState)||"complete"===a?this.start():this.util().addEvent(document,"DOMContentLoaded",this.start),this.finished=[]},e.prototype.start=function(){var b,c,d,e;if(this.stopped=!1,this.boxes=function(){var a,c,d,e;for(d=this.element.querySelectorAll("."+this.config.boxClass),e=[],a=0,c=d.length;c>a;a++)b=d[a],e.push(b);return e}.call(this),this.all=function(){var a,c,d,e;for(d=this.boxes,e=[],a=0,c=d.length;c>a;a++)b=d[a],e.push(b);return e}.call(this),this.boxes.length)if(this.disabled())this.resetStyle();else for(e=this.boxes,c=0,d=e.length;d>c;c++)b=e[c],this.applyStyle(b,!0);return this.disabled()||(this.util().addEvent(this.config.scrollContainer||window,"scroll",this.scrollHandler),this.util().addEvent(window,"resize",this.scrollHandler),this.interval=setInterval(this.scrollCallback,50)),this.config.live?new a(function(a){return function(b){var c,d,e,f,g;for(g=[],c=0,d=b.length;d>c;c++)f=b[c],g.push(function(){var a,b,c,d;for(c=f.addedNodes||[],d=[],a=0,b=c.length;b>a;a++)e=c[a],d.push(this.doSync(e));return d}.call(a));return g}}(this)).observe(document.body,{childList:!0,subtree:!0}):void 0},e.prototype.stop=function(){return this.stopped=!0,this.util().removeEvent(this.config.scrollContainer||window,"scroll",this.scrollHandler),this.util().removeEvent(window,"resize",this.scrollHandler),null!=this.interval?clearInterval(this.interval):void 0},e.prototype.sync=function(b){return a.notSupported?this.doSync(this.element):void 0},e.prototype.doSync=function(a){var b,c,d,e,f;if(null==a&&(a=this.element),1===a.nodeType){for(a=a.parentNode||a,e=a.querySelectorAll("."+this.config.boxClass),f=[],c=0,d=e.length;d>c;c++)b=e[c],g.call(this.all,b)<0?(this.boxes.push(b),this.all.push(b),this.stopped||this.disabled()?this.resetStyle():this.applyStyle(b,!0),f.push(this.scrolled=!0)):f.push(void 0);return f}},e.prototype.show=function(a){return this.applyStyle(a),a.className=a.className+" "+this.config.animateClass,null!=this.config.callback&&this.config.callback(a),this.util().emitEvent(a,this.wowEvent),this.util().addEvent(a,"animationend",this.resetAnimation),this.util().addEvent(a,"oanimationend",this.resetAnimation),this.util().addEvent(a,"webkitAnimationEnd",this.resetAnimation),this.util().addEvent(a,"MSAnimationEnd",this.resetAnimation),a},e.prototype.applyStyle=function(a,b){var c,d,e;return d=a.getAttribute("data-wow-duration"),c=a.getAttribute("data-wow-delay"),e=a.getAttribute("data-wow-iteration"),this.animate(function(f){return function(){return f.customStyle(a,b,d,c,e)}}(this))},e.prototype.animate=function(){return"requestAnimationFrame"in window?function(a){return window.requestAnimationFrame(a)}:function(a){return a()}}(),e.prototype.resetStyle=function(){var a,b,c,d,e;for(d=this.boxes,e=[],b=0,c=d.length;c>b;b++)a=d[b],e.push(a.style.visibility="visible");return e},e.prototype.resetAnimation=function(a){var b;return a.type.toLowerCase().indexOf("animationend")>=0?(b=a.target||a.srcElement,b.className=b.className.replace(this.config.animateClass,"").trim()):void 0},e.prototype.customStyle=function(a,b,c,d,e){return b&&this.cacheAnimationName(a),a.style.visibility=b?"hidden":"visible",c&&this.vendorSet(a.style,{animationDuration:c}),d&&this.vendorSet(a.style,{animationDelay:d}),e&&this.vendorSet(a.style,{animationIterationCount:e}),this.vendorSet(a.style,{animationName:b?"none":this.cachedAnimationName(a)}),a},e.prototype.vendors=["moz","webkit"],e.prototype.vendorSet=function(a,b){var c,d,e,f;d=[];for(c in b)e=b[c],a[""+c]=e,d.push(function(){var b,d,g,h;for(g=this.vendors,h=[],b=0,d=g.length;d>b;b++)f=g[b],h.push(a[""+f+c.charAt(0).toUpperCase()+c.substr(1)]=e);return h}.call(this));return d},e.prototype.vendorCSS=function(a,b){var c,e,f,g,h,i;for(h=d(a),g=h.getPropertyCSSValue(b),f=this.vendors,c=0,e=f.length;e>c;c++)i=f[c],g=g||h.getPropertyCSSValue("-"+i+"-"+b);return g},e.prototype.animationName=function(a){var b;try{b=this.vendorCSS(a,"animation-name").cssText}catch(c){b=d(a).getPropertyValue("animation-name")}return"none"===b?"":b},e.prototype.cacheAnimationName=function(a){return this.animationNameCache.set(a,this.animationName(a))},e.prototype.cachedAnimationName=function(a){return this.animationNameCache.get(a)},e.prototype.scrollHandler=function(){return this.scrolled=!0},e.prototype.scrollCallback=function(){var a;return!this.scrolled||(this.scrolled=!1,this.boxes=function(){var b,c,d,e;for(d=this.boxes,e=[],b=0,c=d.length;c>b;b++)a=d[b],a&&(this.isVisible(a)?this.show(a):e.push(a));return e}.call(this),this.boxes.length||this.config.live)?void 0:this.stop()},e.prototype.offsetTop=function(a){for(var b;void 0===a.offsetTop;)a=a.parentNode;for(b=a.offsetTop;a=a.offsetParent;)b+=a.offsetTop;return b},e.prototype.isVisible=function(a){var b,c,d,e,f;return c=a.getAttribute("data-wow-offset")||this.config.offset,f=this.config.scrollContainer&&this.config.scrollContainer.scrollTop||window.pageYOffset,e=f+Math.min(this.element.clientHeight,this.util().innerHeight())-c,d=this.offsetTop(a),b=d+a.clientHeight,e>=d&&b>=f},e.prototype.util=function(){return null!=this._util?this._util:this._util=new b},e.prototype.disabled=function(){return!this.config.mobile&&this.util().isMobile(navigator.userAgent)},e}()}).call(this);