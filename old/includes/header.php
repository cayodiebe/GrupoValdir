<?php $rede_social = new Redes_sociais($banco->getRedesSociais()); ?>
<?php $banners = $banco->getBanners(); ?>
<?php if( !isset($get[0]) || ( isset($get[0]) && $get[0] == 'home' ) ): ?>
<style type="text/css" media="screen">
	@media only screen and (max-width:750px) {
		#icon_menu{
			margin-top: 100vh;
		}
	}
</style>
<div class="container" id="carousel">
	<?php foreach($banners as $banner): ?>
	<?php $obj = new Banner_home($banner); ?>
		<div class="item" style="background-image: url(assets/images/<?php echo $obj->getimagem(); ?>);">
			<div class="titulo wow bounceInDown" style="visibility: visible; animation-duration: 0.5s; animation-name: bounceInDown;" data-wow-duration="1.5s">
				<?php echo $obj->gettitulo(); ?>
			</div>
			<center>
				<div class="texto wow lightSpeedIn" style="visibility: visible; animation-duration: 0.5s; animation-name: bounceInDown;" data-wow-duration="1s">
					<?php echo $obj->gettexto(); ?>
				</div>
			</center>
			<center>
				<div class="saiba_mais botao _tr  wow bounceInDown" style="visibility: visible; animation-duration: 0.5s; animation-name: bounceInDown;" data-wow-duration="0.8s">
					<?php if( $obj->getlink() != '' ): ?>
					<a href="<?php echo $obj->getlink(); ?>" title="<?php echo $obj->gettitulo(); ?>">
						<span>Saiba Mais</span>
					</a>
				<?php endif; ?>
				</div>
			</center>
		</div>
	<?php unset($obj); ?>
	<?php endforeach; ?>				
</div>
<div class="customPrevBtn botao" _tr>
	<img class="lazyOwl prev" src="assets/images/prev.png" alt="">
</div>
<div class="customNextBtn botao _tr ">
	<img class="lazyOwl next" src="assets/images/next.png" alt="">
</div>
<div class="mouse">
	<center>
		<img src="<?php echo $base; ?>assets/images/mouse.png" class="botao _tr" alt="" />
	</center>
</div>
<script>
	
	$(document).ready(function() {
	 	
		if( getScroll() === 0 )
			var rolagem = true;
		else
			var rolagem = false;

		$( window ).scroll(function() {
			
			if( getScroll() > 1 && rolagem === true ){
				rolagem = false;
				// if( $(window).width() < 900 )
					// $("html,body").animate({ scrollTop: $("#conteudo").offset().top }, 1000);
				// else
					$("html,body").animate({ scrollTop: $("#menu").offset().top  }, 1000);
			}

			if( getScroll() === 0 )
				rolagem = true;
			else
				rolagem = false;

		});

		function getScroll(){
			return $(document).scrollTop();
		}

		$("html body").on('click', '.mouse',function() {
			$("html body").animate({ scrollTop: $("#menu").offset().top }, 1000);
		});

	    $("#carousel").owlCarousel({
		    items : 1,
		    autoplay: true,
		    lazyLoad : true,
		    nav:false,
		    animateIn: 'fade',
		    }); 


		    var owlH = $('#carousel');
		    owlH.owlCarousel();
		    // Go to the next item
		    $('header .customNextBtn').click(function() {
		        owlH.trigger('next.owl.carousel');
		    })
		    // Go to the previous item
		    $('header.customPrevBtn').click(function() {
		        // With optional speed parameter
		        // Parameters has to be in square bracket '[]'
		        owlH.trigger('prev.owl.carousel', [500]);
		    })
		     
		});
</script>
<?php elseif( isset($get[0]) && $get[0] == 'login' ): ?>
<div class="container" id="carousel">
	<div class="item" id="login" style="background-image: url(assets/images/login.jpg);">
		<div class="titulo wow bounceInDown" style="visibility: visible; animation-duration: 0.5s; animation-name: bounceInDown;" data-wow-duration="1.5s">
			Faça seu Login
		</div>
		<?php if( isset($get[1]) && $get[1] == 'erro' ): ?>
			<center style="margin-top:30px;">
				<span style="padding:20px;text-align:center;color:red;background:rgba(255,255,255,0.6)">Usuário ou Senha Inválido!</span>
			</center>
		<?php endif; ?>
		<form action="valida" method="POST" accept-charset="utf-8">
			<center>
				<input required type="text" name="login" placeholder="Usuário" class="wow lightSpeedIn" style="visibility: visible; animation-duration: 0.5s; animation-name: bounceInDown;" data-wow-duration="1.3s">
				<input required type="password" name="senha" placeholder="Senha" class="wow lightSpeedIn" style="visibility: visible; animation-duration: 0.5s; animation-name: bounceInDown;" data-wow-duration="1s">
			</center>
			<center>
				<div class="saiba_mais  wow bounceInDown" style="visibility: visible; animation-duration: 0.5s; animation-name: bounceInDown;" data-wow-duration="0.8s">
					<button type="submit"><span class="botao _tr">Logar</span></button>
				</div>
			</center>
		</form>
	</div>
</div>
<?php endif; ?>
<?php if( !isset($get[0]) || ( isset($get[0]) && $get[0] != 'login' ) ): ?>
<section class="container wow fadeInDown top__element" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;" id="menu">
	<div class="logo" id="">
		<a href="<?php echo $base; ?>" title="Página Inicial">
			<img src="<?php echo $base; ?>assets/images/logo.png" class="" alt="Logo Valdir" />
		</a>
	</div>
	<?php include 'includes/menu.php'; ?>
	<?php if( !isset($get[0]) || ( isset($get[0]) && $get[0] == '' ) ): ?>
	<div class="login" id="">
		<a href="<?php echo $base; ?>login" title="Fazer Login">
			<span>Fazer Login</span>
		</a>
	</div>
	<?php else: ?>
		<div class="rede_social" id="">
			<a href="<?php echo $rede_social->getfacebook() ?>" title="<?php echo $rede_social->getfacebook_titulo() ?>">
				<i class="fab fa-facebook" aria-hidden="true"></i>
			</a>
			<a href="<?php echo $rede_social->getinstagran() ?>" title="<?php echo $rede_social->getinstagran_titulo() ?>">
				<i class="fab fa-instagram" aria-hidden="true"></i>
			</a>
			<!-- <a href="<?php echo $rede_social->getgoogle_mais() ?>" title="<?php echo $rede_social->getgoogle_mais_titulo() ?>">
				<i class="fab fa-google-plus" aria-hidden="true"></i>
			</a> -->
			<a href="https://br.linkedin.com/company/valdirpinturas" title="">
				<i class="fab fa-linkedin" aria-hidden="true"></i>
			</a>
		</div>
	<?php endif; ?>
</section>
<?php endif; ?>

<img src="<?php echo $base; ?>assets/images/icon_menu.png" id="icon_menu" status="fechado" class="wow bounceInDown" style="visibility: visible; animation-name: bounceInDown;" data-wow-duration="1.5s" />

<script>
    $(window).load(function() {
    	$("html body").on('click', '#icon_menu',function() {
    		if( $(this).attr("status") === "fechado" ){
    			$(this).attr("status","aberto");
    			$("#menu .menu").css("display","block");
    		}
    		else{
    			$(this).attr("status","fechado");
    			$("#menu .menu").css("display","none");
    		}
    	});
    });
</script>