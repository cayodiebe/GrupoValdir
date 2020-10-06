<header>

	<div class="topo">

		<div class="limitador">

			<a href="<?=BASE_SITE;?>">

				<img src="<?=BASE_SITE;?>assets/images/logo.png" class="logo">

			</a>

			<div class="boxs">

				<div class="cada">

					<i class="fas fa-map-marker-alt"></i>

					<span>Sorocaba, SP</span>

				</div>

				<div class="cada">

					<i class="fas fa-phone"></i>

					<span>(15) 3266-2404</span>

				</div>

			</div>

		</div>

	</div>

	<div class="menu">

		<div class="limitador">

			<ul>

				<li class="<?=(!isset($get[0]) ? 'ativo' : '');?>"><a href="<?=BASE_SITE;?>">Home</a></li>

				<li class="<?=($get[0]=='empresa' ? 'ativo' : '');?>"><a href="<?=BASE_SITE;?>empresa">A Empresa</a></li>

				<li class="<?=($get[0]=='servicos' || $get[0]=='servico' ? 'ativo' : '');?>"><a href="<?=BASE_SITE;?>servicos">Serviços</a></li>

				<li class="<?=($get[0]=='clientes' ? 'ativo' : '');?>"><a href="<?=BASE_SITE;?>clientes">Clientes</a></li>

				<li class="<?=($get[0]=='contato' ? 'ativo' : '');?>"><a href="<?=BASE_SITE;?>contato">Contato</a></li>

			</ul>

		</div>

	</div>

</header>







<!-- Menu Hamburguer -->

<div class="overlay_hamb"></div>

<div id="hamburguer" class="hamburguer _tr">

    <span class="line _tr"></span>

    <span class="line _tr"></span>

    <span class="line _tr"></span>

</div>

<div class="menu-responsive _tr">

    <ul>

    	<li class="<?=(!isset($get[0]) ? 'ativo' : '');?>"><a href="<?=BASE_SITE;?>">Home</a></li>

		<li class="<?=($get[0]=='empresa' ? 'ativo' : '');?>"><a href="<?=BASE_SITE;?>empresa">A Empresa</a></li>

		<li class="<?=($get[0]=='servicos' || $get[0]=='servico' ? 'ativo' : '');?>"><a href="<?=BASE_SITE;?>servicos">Serviços</a></li>

		<li class="<?=($get[0]=='clientes' ? 'ativo' : '');?>"><a href="<?=BASE_SITE;?>clientes">Clientes</a></li>

		<li class="<?=($get[0]=='contato' ? 'ativo' : '');?>"><a href="<?=BASE_SITE;?>contato">Contato</a></li>

	</ul>

</div>