<?php $servicos_itens = $banco->getServicosItens(); ?>
<?php $servicos = new Servicos($banco->getServicos()); ?>
<?php $servicos_equipe = new Servicos_equipe($banco->getServicosEquipe()); ?>
<?php $servicos_equipe_itens = $banco->getServicosEquipeItens() ?>
<section class="container" id="servicos">
	 <div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone servicos" id="">
	    <h1><?php echo $servicos->gettitulo(); ?></h1>
        <center>
            <div class="texto wow bounceInDown" style="visibility: visible; animation-name: bounceInDown;" data-wow-duration="1.5s">
                <?php echo $servicos->gettexto(); ?>
            </div>
        </center>
        <div class="itens">
            <?php $servico1 = new Servicos_itens($servicos_itens[0]); ?>
	        <?php $servico2 = new Servicos_itens($servicos_itens[1]); ?>
	        <?php $servico3 = new Servicos_itens($servicos_itens[2]); ?>
	        <div class="itens" id="">
	            <div class="item1 wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="1.5s">
	                <center>
	                    <img src="<?php echo $base; ?>assets/images/<?php echo $servico1->getimagem() ?>" width="150" class="" alt="" />
	                    <h2><?php echo $servico1->gettitulo() ?></h2>
	                    <div class="texto" id="">
	                        <?php echo $servico1->gettexto() ?>
	                    </div>
	                </center>
	            </div>
	            <center>
	                <div class="item2 wow bounceInUp" style="visibility: visible; animation-name: bounceInUp;" id="">
	                    <img src="<?php echo $base; ?>assets/images/<?php echo $servico2->getimagem() ?>" width="150" class="" alt="" />
	                    <h2><?php echo $servico2->gettitulo() ?></h2>
	                    <div class="texto" id="">
	                        <?php echo $servico2->gettexto() ?>
	                    </div>
	                </div>
	            </center>
	            <div class="item3 wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" data-wow-duration="1.5s">
	                <img src="<?php echo $base; ?>assets/images/<?php echo $servico3->getimagem() ?>" width="150" class="" alt="" />
	                <h2><?php echo $servico3->gettitulo() ?></h2>
	                <div class="texto" id="">
	                    <?php echo $servico3->gettexto() ?>
	                </div>
	            </div>
	        </div>
        </div>
        <!-- <div class="customPrevBtn botao _tr wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="2s">
			<img class="lazyOwl prev" src="assets/images/prev2.png" alt="">
		</div>
		<div class="customNextBtn botao _tr wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" data-wow-duration="2s">
			<img class="lazyOwl next" src="assets/images/next2.png" alt="">
		</div> -->
    </div>
    <div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone equipe" id="">
    	<div class="grid-5-desktop grid-5-laptop grid-5-tablet grid-16-phone quadro" id="">
    		<div style="-webkit-transform: rotate(-90deg);-moz-transform: rotate(-90deg);-o-transform: rotate(-90deg);-sand-transform: rotate(-90deg);transform: rotate(-90deg);">
    			<p><?php echo $servicos_equipe->gettitulo_vertical(); ?></p>
    			<hr>
    		</div>
    	</div>
    	<div class="grid-11-desktop grid-11-laptop grid-11-tablet grid-16-phone" id="">
    		<div class="quadro">
	            <div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone wow bounceInRight" data-wow-duration="1s" style="visibility: visible; animation-name: bounceInRight;" id="carousel_equipe">
	                <?php foreach($servicos_equipe_itens as $dado): ?>
	                <?php $obj = new Servicos_equipe_itens($dado); ?>
	                	<div class="item" id="">
		                    <img src="<?php echo $base; ?>assets/images/<?php echo $obj->getimagem() ?>" class="" alt="<?php echo $obj->getdescricao() ?>" />
		                </div>
	                <?php unset($obj); ?>
	                <?php endforeach; ?>				
	            </div>
	            <div class="customPrevBtn botao wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" data-wow-duration="2.5s" _tr>
	                <img class="lazyOwl prev" src="assets/images/prev2.jpg" width="40">
	            </div>
	            <div class="customNextBtn botao _tr wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" data-wow-duration="2.5s">
	                <img class="lazyOwl next" src="assets/images/next2.jpg" width="40">
	            </div>
	        </div>
    	</div>
    </div>
    <div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone nossa_equipe" id="">
    	<h1 class="wow bounceInDown" style="visibility: visible; animation-name: bounceInDown;" data-wow-duration="2s">
    		<?php echo $servicos_equipe->gettitulo2(); ?>
    	</h1>
    	<div class="texto wow bounceInUp" style="visibility: visible; animation-name: bounceInUp;" data-wow-duration="2s" id="">
			<?php echo $servicos_equipe->gettexto(); ?>
    	</div>
    </div>
</section>
<script>
	
	$(window).load(function() {
	
		left = $("#servicos .equipe #carousel_equipe img").width() - 50;
		left2 = $("#servicos .equipe #carousel_equipe img").width() - 100;
		topo = $("#servicos .equipe #carousel_equipe item").height() - 50;

		$(".equipe.customPrevBtn").css("left",left2+"px");
		$(".equipe.customNextBtn").css("left",left+"px");

		$(".equipe.customPrevBtn").css("top",topo+"px");
		$(".equipe.customNextBtn").css("top",topo+"px");	 	

	 	$("#carousel_equipe").owlCarousel({
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


	    var owl = $('#carousel_equipe');
	    owl.owlCarousel();
	    // Go to the next item
	    $('.equipe .customNextBtn').click(function() {
	        owl.trigger('next.owl.carousel');
	    })
	    // Go to the previous item
	    $('.equipe .customPrevBtn').click(function() {
	        // With optional speed parameter
	        // Parameters has to be in square bracket '[]'
	        owl.trigger('prev.owl.carousel', [500]);
	    })


	    $("#carousel_servicos").owlCarousel({
		    items : 3,
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
		        800:{
		            items:3
		        }
		    }
	    }); 


	    var owl2 = $('#carousel_servicos');
	    owl2.owlCarousel();
	    // Go to the next item
	    $('.servicos .customNextBtn').click(function() {
	        owl2.trigger('next.owl.carousel');
	    })
	    // Go to the previous item
	    $('.servicos .customPrevBtn').click(function() {
	        // With optional speed parameter
	        // Parameters has to be in square bracket '[]'
	        owl2.trigger('prev.owl.carousel', [500]);
		    })
		     
	});
</script>