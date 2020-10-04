<?php $sobre = new Sobre($banco->getSobre()); ?>
<?php $sobre_banners = $banco->getSobreBanners(); ?>
<section class="container" id="sobre">
	<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone nopad" id="">
		<div class="grid-8-desktop grid-8-laptop grid-8-tablet grid-16-phone nopad conteudo" id="">
			<h1 class="wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="1s">
				<?php echo $sobre->gettitulo(); ?>
			</h1>
			<div class="texto wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="1.5s" id="">
				<?php echo $sobre->gettexto(); ?>
			</div>
			<br><br><br>
			<img src="<?php echo $base; ?>assets/images/<?php echo $sobre->getassinatura(); ?>" class="wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="2s" alt="Assinatura Valdir" width="200" />
		</div>
		<div class="grid-8-desktop grid-8-laptop grid-8-tablet grid-16-phone quadro" id="">
			<img src="<?php echo $base; ?>assets/images/<?php echo $sobre->getimagem(); ?>" class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" data-wow-duration="2s" alt="" />
		</div>
	</div>
	<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone nopad_t nopad_b nopad_l banner">
		<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone nopad" id="carousel_sobre">
			<?php foreach($sobre_banners as $dado): ?>
			<?php $obj = new Sobre_banners($dado); ?>
				<div class="item" id="">
					<img src="<?php echo $base; ?>assets/images/<?php echo $obj->getimagem() ?>" class="wow bounceInDown" style="visibility: visible; animation-name: bounceInDown;" data-wow-duration="1s" alt="<?php echo $obj->getdescricao() ?>" />
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
	<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone nopad textos" id="">
		<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone nopad item" id="">
			<h1 class="wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="1s">
				<?php echo $sobre->gettitulo_nossa_empresa(); ?>
			</h1>
			<div class="texto wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="1.5s" id="">
				<?php echo $sobre->gettexto_nossa_empresa(); ?>
			</div>
		</div>
		<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone nopad item" id="">
			<h1 class="wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="1s">
				<?php echo $sobre->gettitulo_missao(); ?>
			</h1>
			<div class="texto wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="1.5s" id="">
				<?php echo $sobre->gettexto_missao(); ?>
			</div>
		</div>
		<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone nopad item" id="">
			<h1 class="wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="1s">
				<?php echo $sobre->gettitulo_visao(); ?>
			</h1>
			<div class="texto wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="1.5s" id="">
				<?php echo $sobre->gettexto_visao(); ?>
			</div>
		</div>
		<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone nopad item" id="">
			<h1 class="wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="1s">
				<?php echo $sobre->gettitulo_valores(); ?>
			</h1>
			<div class="texto wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="1.5s" id="">
				<?php echo $sobre->gettexto_valores(); ?>
			</div>
		</div>

	</div>
</section>
<script>
	
	$(window).load(function() {
	 	
	 	// Banners ---------------------
		left = $("#sobre #carousel_sobre .item img").width() - 50;
		left2 = $("#sobre #carousel_sobre .item img").width() - 100;
		topo = $("#sobre #carousel_sobre .item").height() - 50;

		$(".customPrevBtn").css("left",left2+"px");
		$(".customNextBtn").css("left",left+"px");

		$(".customPrevBtn").css("top",topo+"px");
		$(".customNextBtn").css("top",topo+"px");

	 	$("#carousel_sobre").owlCarousel({
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


	    var owl = $('#carousel_sobre');
	    owl.owlCarousel();
	    // Go to the next item
	    $('.banner .customNextBtn').click(function() {
	        owl.trigger('next.owl.carousel');
	    })
	    // Go to the previous item
	    $('.banner .customPrevBtn').click(function() {
	        // With optional speed parameter
	        // Parameters has to be in square bracket '[]'
	        owl.trigger('prev.owl.carousel', [500]);
	    });
		     
	});
</script>