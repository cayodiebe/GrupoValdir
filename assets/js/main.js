
/***********************
******** PRONTO ********
************************/
	$(document).ready(function(){

		// smoothScroll();

		// ScrollReveal({
		// 	reset: true,
		// 	duration: 800,
		// 	origin:'top',
		// 	distance:'20px'
		// }).reveal('.scrollReveal');


		// Menu hamburguer
		$(".hamburguer").on("click", function () {
			if ($(this).hasClass("hamburguerAtivo")) {
				$(this).removeClass("hamburguerAtivo");
				$(".menu-responsive").css("right", "100%");
				$(".overlay_hamb").fadeOut("fast");
			} else {
				$(this).addClass("hamburguerAtivo");
				$(".menu-responsive").css("right", "75px");
				$(".overlay_hamb").fadeIn("fast");
			}
		});
		$(".overlay_hamb").on("click", function () {
			$(".hamburguer").removeClass("hamburguerAtivo");
			$(".menu-responsive").css("right", "100%");
			$(".overlay_hamb").fadeOut("fast");
		});
		$(".menu-responsive a").on("click", function () {
			$(".hamburguer").removeClass("hamburguerAtivo");
			$(".menu-responsive").css("right", "100%");
			$(".overlay_hamb").fadeOut("fast");
		});

	});

/***********************
***** AO CARREGAR ******
************************/
	// $(window).load(function(){

	// });


/**************************
****** AO DAR SCROLL ******
***************************/

	// $(window).scroll(function(){

	// });


/***********************
***** OWL CAROUSEL *****
************************/
	$(".banners").owlCarousel({
		autoPlay: 3000,
		items: 1,
		singleItem: true
	});


/***********************
****** FUNCTIONS *******
************************/

	function smoothScroll(){
		// SMOOTH SCROLL
		$('a[href*=#]:not([href=#])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html,body').animate({
		          scrollTop: target.offset().top
		        }, 1000);
		        return false;
		      }
		    }
		});
	}