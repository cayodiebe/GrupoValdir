<section class="container" id="projetos">
	<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone conteudo" id="">
		<h1 class="wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="2s">Nossos Projetos</h1>
		<div class="texto wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" data-wow-duration="2s" id="">
			-
			This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. 
			Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis 
			sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi 
			accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris 
			vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per 
			conubia nostra, per inceptos himenaeos. Mauris in erat justo.
		</div>
	</div>
	<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone residencial" id="">
		<div class="quadro" id=""></div>
		<div class="grid-4-desktop grid-4-laptop grid-4-tablet grid-4-phone wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="2s" id="">
			<p>
				Re<br>
				si<br>
				den<br>
				cial<span>.</span>
			</p>
		</div>
		<div class="grid-12-desktop grid-12-laptop grid-12-tablet grid-12-phone nopad_t nopad_b nopad_l banner">
			<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone nopad" id="carousel_residencial">
				<div class="item" id="">
					<img src="<?php echo $base; ?>assets/images/empresarial.jpg" class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" data-wow-duration="2s" alt="" />
				</div>
				<div class="item" id="">
					<img src="<?php echo $base; ?>assets/images/empresarial.jpg" class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" data-wow-duration="2s" alt="" />
				</div>
				<div class="item" id="">
					<img src="<?php echo $base; ?>assets/images/empresarial.jpg" class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" data-wow-duration="2s" alt="" />
				</div>
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
	<center>
		<div class="orcamento" id="">
			<a href="http://localhost/valdir/" title="">
				<span>Solicitar um orcamento</span>
			</a>
		</div>
	</center>
</section>
<script>
	
	$(document).ready(function() {

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
            dots:false,
            animateIn: 'fade',
        }); 


        var owl = $('#carousel_empresarial');
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



</script>					