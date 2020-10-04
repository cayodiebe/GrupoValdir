<?php $projetos = new Projetos($banco->getProjetos()); ?>
<?php $projetos_edificios = $banco->getProjetosEdificios(); ?>
<?php $projetos_empresarial = $banco->getProjetosEmpresarial(); ?>
<?php $projetos_residencial = $banco->getProjetosResidencial(); ?>
<section class="container" id="projetos">
	<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone conteudo" id="">
		<h1 class="wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="2s">
			<?php echo $projetos->gettitulo(); ?>
		</h1>
		<div class="texto wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" data-wow-duration="2s" id="">
			<?php echo $projetos->gettexto(); ?>
		</div>
	</div>
	<div class="grid-4-desktop grid-4-laptop grid-4-tablet grid-16-phone show-phone wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" data-wow-duration="2s" id="">
		<p>
			Empresarial<span>.</span>
		</p>
	</div>
	<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone empresarial" id="">
		<div class="quadro" id=""></div>
		<div class="grid-12-desktop grid-12-laptop grid-12-tablet grid-16-phone nopad_t nopad_b nopad_l banner">
			<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone nopad" id="carousel_empresarial">
				<?php $i = 0; ?>
				<?php foreach($projetos_empresarial as $dado): ?>
				<?php $obj = new Projetos_empresarial($dado); ?>
					<div class="item  <?php if( $i == 0 ) echo ' wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="2s';; $i = 1; ?>" id="">
						<div class="cliente">
							<?php echo $obj->getcliente(); ?>
						</div>
						<img src="<?php echo $base; ?>assets/images/<?php echo $obj->getimagem(); ?>" alt="<?php echo $obj->getdescricao(); ?>" />
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
		<div class="grid-4-desktop grid-4-laptop grid-4-tablet grid-16-phone hide-phone wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" data-wow-duration="2s" id="">
			<p>
				In<br>
				dus<br>
				rial<span>.</span>
			</p>
		</div>
	</div>
	<div class="grid-4-desktop grid-4-laptop grid-4-tablet grid-4-phone show-phone wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="2s" id="">
		<p>
			Residencial<span>.</span>
		</p>
	</div>
	<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone residencial" id="">
		<div class="quadro" id=""></div>
		<div class="grid-4-desktop grid-4-laptop grid-4-tablet grid-4-phone hide-phone  wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="2s" id="">
			<p>
				Pós<br>
				O<br>
				bra<span>.</span>
			</p>
		</div>
		<div class="grid-12-desktop grid-12-laptop grid-12-tablet grid-16-phone nopad_t nopad_b nopad_l banner">
			<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone nopad" id="carousel_residencial">
				<?php $i = 0; ?>
				<?php foreach($projetos_residencial as $dado): ?>
				<?php $obj = new Projetos_residencial($dado); ?>
					<div class="item  <?php if( $i == 0 ) echo ' wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" data-wow-duration="2s';; $i = 1; ?>" id="">
						<img src="<?php echo $base; ?>assets/images/<?php echo $obj->getimagem(); ?>" alt="<?php echo $obj->getdescricao(); ?>" />
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
	<div class="grid-4-desktop grid-4-laptop grid-4-tablet grid-16-phone show-phone wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" data-wow-duration="2s" id="">
		<p>
			Comercial<span>.</span>
		</p>
	</div>
	<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone edificios" id="">
		<div class="quadro" id=""></div>
		<div class="grid-12-desktop grid-12-laptop grid-12-tablet grid-16-phone nopad_t nopad_b nopad_l banner">
			<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone nopad" id="carousel_edificios">
				<?php $i = 0; ?>
				<?php foreach($projetos_edificios as $dado): ?>
				<?php $obj = new Projetos_edificios($dado); ?>
					<div class="item  <?php if( $i == 0 ) echo ' wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="2s';; $i = 1; ?>" id="">
						<img src="<?php echo $base; ?>assets/images/<?php echo $obj->getimagem() ?>" alt="<?php echo $obj->getdescricao() ?>" />
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
		<div class="grid-4-desktop grid-4-laptop grid-4-tablet grid-4-phone hide-phone wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" data-wow-duration="2s" id="">
			<p>
				Co<br>
				mer<br>
				ci<br>
				al<span>.</span>
			</p>
		</div>
	</div>
	<div class="clearfloat"></div>
	<center>
		<div class="orcamento" id="">
			<a href="<?php echo $base; ?>contato#solicitar-orcamento" title="Solicitar Um Orçamento">
				<span>Solicitar um orcamento</span>
			</a>
		</div>
	</center>
</section>
<script>
	
	$(window).load(function() {

		// Empresarial ------------------------------------------
		left = $("#carousel_empresarial .item img").width() - 50;
		left2 = $("#carousel_empresarial .item img").width() - 100;
		topo = $("#carousel_empresarial .item").height() - 50;

		$(".empresarial .customPrevBtn").css("left",left2+"px");
		$(".empresarial .customNextBtn").css("left",left+"px");

		$(".empresarial .customPrevBtn").css("top",topo+"px");
		$(".empresarial .customNextBtn").css("top",topo+"px");

        $("#carousel_empresarial").owlCarousel({
            items : 1,
            lazyLoad : true,
            nav:false,
            autoplay: true,
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


        var owl = $('#carousel_empresarial');
        owl.owlCarousel();
        // Go to the next item
        $('.empresarial .customNextBtn').click(function() {
            owl.trigger('next.owl.carousel');
        })
        // Go to the previous item
        $('.empresarial .customPrevBtn').click(function() {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl.trigger('prev.owl.carousel', [500]);
        });

        // Residencial ------------------------------------------
        left = $("#carousel_residencial .item img").width() - 100;
		left2 = $("#carousel_residencial .item img").width() - 50;
		topo = $("#carousel_residencial .item").height() - 50;
		// top2 = $("#carousel_residencial .item img").height() - 50;

		console.log(topo);
		$(".residencial .customPrevBtn").css("right",left2+"px");
		$(".residencial .customNextBtn").css("right",left+"px");

		$(".residencial .customPrevBtn").css("top",topo+"px");
		$(".residencial .customNextBtn").css("top",topo+"px");

        $("#carousel_residencial").owlCarousel({
            items : 1,
            lazyLoad : true,
            nav:false,
            autoplay: true,
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


        var owl2 = $('#carousel_residencial');
        owl2.owlCarousel();
        // Go to the next item
        $('.residencial .customNextBtn').click(function() {
            owl2.trigger('next.owl.carousel');
        })
        // Go to the previous item
        $('.residencial .customPrevBtn').click(function() {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl2.trigger('prev.owl.carousel', [500]);
        })

        // Edificios ---------------------
		left = $("#carousel_edificios .item img").width() - 50;
		left2 = $("#carousel_edificios .item img").width() - 100;
		topo = $("#carousel_edificios .item").height() - 50;

		$(".edificios .customPrevBtn").css("left",left2+"px");
		$(".edificios .customNextBtn").css("left",left+"px");

		$(".edificios .customPrevBtn").css("top",topo+"px");
		$(".edificios .customNextBtn").css("top",topo+"px");

        $("#carousel_edificios").owlCarousel({
            items : 1,
            lazyLoad : true,
            autoplay: true,
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


        var owl3 = $('#carousel_edificios');
        owl3.owlCarousel();
        // Go to the next item
        $('.edificios .customNextBtn').click(function() {
            owl3.trigger('next.owl.carousel');
        })
        // Go to the previous item
        $('.edificios .customPrevBtn').click(function() {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl3.trigger('prev.owl.carousel', [500]);
        });
             
    });


</script>					