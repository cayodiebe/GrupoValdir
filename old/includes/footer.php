<?php $rede_social = new Redes_sociais($banco->getRedesSociais()); ?>
<?php $contato_footer = new Contato_rodape($banco->getContatoRodape()); ?>
<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone nopad" id="">
	<div class="item" id="">
		<img src="<?php echo $base; ?>assets/images/logo.png" class="logo" alt="" />
	</div>
	<div class="item" id="">
		<div class="direitos" id="">
			Valdir Pinturas <?php echo date("Y") ?>. <br>
			Todos os direitos reservados.
		</div>
	</div>
	<div class="item" id="">
		<ul>
			<li>
				<a <?php $functions->getPageActive($get,'home') ?> href="<?php echo $base; ?>" title="Página Inicial">
					Home
				</a>
			</li>
			<li>
				<a <?php $functions->getPageActive($get,'sobre') ?> href="<?php echo $base; ?>sobre" title="Sobre">
					Sobre
				</a>
			</li>
			<li>
				<a <?php $functions->getPageActive($get,'servicos') ?> href="<?php echo $base; ?>servicos" title="Serviços">
					Serviços
				</a>
			</li>
			<li>
				<a <?php $functions->getPageActive($get,'projetos') ?> href="<?php echo $base; ?>projetos" title="Projetos">
					Projetos
				</a>
			</li>
			<li>
				<a <?php $functions->getPageActive($get,'contato') ?> href="<?php echo $base; ?>contato" title="Contato">
					Contato
				</a>
			</li>
			<li>
				<a <?php $functions->getPageActive($get,'login') ?> href="<?php echo $base; ?>login" title="login">
					Fazer Login
				</a>
			</li>
		</ul>
	</div>	
	<div class="item" id="">
		<?php echo $contato_footer->getendereco() ?>
		<br>
		Ligar <span><?php echo $contato_footer->gettelefone() ?></span>
	</div>
	<div class="item rede_social" id="">
		<a href="<?php echo $rede_social->getfacebook() ?>" title="<?php echo $rede_social->getfacebook_titulo() ?>">
			<i class="fab fa-facebook" aria-hidden="true"></i>
		</a>
		<a href="<?php echo $rede_social->getinstagran() ?>" title="<?php echo $rede_social->getinstagran_titulo() ?>">
			<i class="fab fa-instagram" aria-hidden="true"></i>
		</a>
		<a href="<?php echo $rede_social->getgoogle_mais() ?>" title="<?php echo $rede_social->getgoogle_mais_titulo() ?>">
			<i class="fab fa-google-plus" aria-hidden="true"></i>
		</a>
	</div>
	<br><br><br><br><br>
	<center style="font-family: 'nexa-light';">Desenvolvido por <a target="_blank" href="http://musca.org/" title="Agência Musca">Musca.org</a></center>
	<br>
</div>