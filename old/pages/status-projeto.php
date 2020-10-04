<?php include 'includes/lock.php'; ?>
<?php $status_projeto = new Status_projeto($banco->getStatusProjeto()); ?>
<?php $status_projeto_imagens = $banco->getStatusProjetoImagens(); ?>
<?php $status_projeto_noticias = $banco->getStatusProjetoNoticias(); ?>
<section class="container" id="status_projetos">
	<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone conteudo" id="">
		<h1 class="wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="2s">
			Olá <?php echo $status_projeto->getnome() ?>!
		</h1>
		<div class="texto wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" data-wow-duration="2s" id="">
			<?php echo $status_projeto->gettexto() ?>
		</div>
	</div>
	<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone nopad status" id="">
		<center>
			<h1>Confira o Status do seu Projeto</h1>
			<button><?php echo $status_projeto->getstatus() ?></button>
		</center>
	</div>
	<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone residencial" id="">
		<div class="quadro" id=""></div>
		<div class="grid-4-desktop grid-4-laptop grid-4-tablet grid-16-phone wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="2s" id="">
			<p>
				Seu<br>
				Projeto<span>.</span>
			</p>
		</div>
		<div class="grid-12-desktop grid-12-laptop grid-12-tablet grid-16-phone nopad_t nopad_b nopad_l banner">
			<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone nopad" id="carousel_seu_projeto">
				<?php foreach($status_projeto_imagens as $dado): ?>
				<?php $obj = new Status_projetos_imagens($dado); ?>
					<div class="item" id="">
						<img src="<?php echo $base; ?>assets/images/<?php echo $obj->getimagem() ?>" class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" data-wow-duration="2s" alt="" />
					</div>
				<?php unset($obj); ?>
				<?php endforeach; ?>				
			</div>
			<div class="customPrevBtn botao _tr">
				<img class="lazyOwl prev" src="assets/images/prev2.jpg" alt="">
			</div>
			<div class="customNextBtn botao _tr">
				<img class="lazyOwl next" src="assets/images/next2.jpg" alt="">
			</div>
		</div>
	</div>
	<div class="clearfloat"></div>
	<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone etapas" id="">
		<?php foreach($status_projeto_noticias as $dado): ?>
		<?php $obj = new Status_projeto_noticias($dado); ?>
			<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone cada wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="1s" id="">
				<h1>
					<?php echo $obj->getnoticia(); ?><img src="<?php echo $base; ?>assets/images/prev2.jpg" class="botao _tr inativo" status="fechado" alt="" />
				</h1>
				<div class="texto _tr" id="">
					<?php echo $obj->gettexto(); ?>
				</div>
			</div>
		<?php unset($obj); ?>
		<?php endforeach; ?>				
	</div>
	<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone form" id="">
		<div class="texto wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="2s" id="">
			-<br>
			Se você deseja saber mais sobre o seu projeto, entre em contato conosco através do e-mail, ou através dos nossos 
			veículos de comunicação.
		</div>
		<form action="solicitar-contato" method="POST" accept-charset="utf-8">
			<input class="wow bounceInRight style="visibility: visible; animation-name: bounceInRight data-wow-duration="2s" type="text" name="assunto" value="" placeholder="Assunto">
			<textarea class=" wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="2s"name="mensagem" placeholder="Mensagem"></textarea>
			<button class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" data-wow-duration="2s" type="submit">Enviar</button>
		</form>
	</div>
</section>
<script>
	
	$(window).load(function() {

		$("html body").on('click', '.cada img',function() {
			if( $(this).attr("status") === "fechado" ){
				$(this).parent().parent().find(".texto").css("display","block");
				$(this).attr("status","aberto");
				$(this).removeClass("inativo");
				$(this).addClass("ativo");

			}else{
				$(this).parent().parent().find(".texto").css("display","none");
				$(this).attr("status","fechado");
				$(this).addClass("inativo");
				$(this).removeClass("ativo");
			}

		});

        // Residencial ------------------------------------------
        left = $("#carousel_seu_projeto .item img").width() - 100;
		left2 = $("#carousel_seu_projeto .item img").width() - 50;
		topo = $("#carousel_seu_projeto .item").height() - 50;
		// top2 = $("#carousel_seu_projeto .item img").height() - 50;

		console.log(topo);
		$(".residencial .customPrevBtn").css("right",left2+"px");
		$(".residencial .customNextBtn").css("right",left+"px");

		$(".residencial .customPrevBtn").css("top",topo+"px");
		$(".residencial .customNextBtn").css("top",topo+"px");

        $("#carousel_seu_projeto").owlCarousel({
            items : 1,
            autoplay: true,
            lazyLoad : true,
            nav:false,
            dots:false,
            animateIn: 'fade',
             responsive:{
		        0:{
		            items:1
		        },
		        100:{
		            items:1
		        },
		        200:{
		            items:1
		        }
		    }
        }); 


        var owl = $('#carousel_seu_projeto');
        owl.owlCarousel();
        // Go to the next item
        $('.residencial .customNextBtn').click(function() {
            owl.trigger('next.owl.carousel');
        })
        // Go to the previous item
        $('.residencial .customPrevBtn').click(function() {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl.trigger('prev.owl.carousel', [500]);
        })

    }); 

</script>					