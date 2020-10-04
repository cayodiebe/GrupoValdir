<?php $contato = new Contato($banco->getContato()); ?>
<?php $contato_footer = new Contato_rodape($banco->getContatoRodape()); ?>
<section class="container" id="contato">
	<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone nopad" id="">
		<div class="quadro wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="1s">
			<iframe src="<?php echo $contato->getmapa(); ?>" frameborder="0" style="border:0" allowfullscreen ></iframe>
		</div>
		<div class="dados wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" data-wow-duration="1s" id="">
			<h1><?php echo $contato->gettitulo(); ?></h1>
			<div class="texto" id="">
				<?php echo $contato->getendereco(); ?>
				
				<a href="<?php echo $rede_social->getfacebook() ?>" title="<?php echo $rede_social->getfacebook_titulo() ?>">
					<i class="fab fa-facebook"></i>
				</a>

				<a href="<?php echo $rede_social->getinstagran() ?>" title="<?php echo $rede_social->getinstagran_titulo() ?>">
					<i class="fab fa-instagram"></i>
				</a>
				
			</div>
			<p>Contato.</p>
		</div>
	</div>
	<div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone nopad" >
		<form action="solicitar-orcamento" method="POST" accept-charset="utf-8" >
			<center id="solicitar-orcamento">
				<h1 class="wow bounceInDown" style="visibility: visible; animation-name: bounceInDown;" data-wow-duration="1s">Solicite um Orçamento</h1>
			</center>
			<br><br><br>
			<div class="full wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="1.2s" id="">
				<input required type="text" name="nome" placeholder="Nome ou Empresa">
			</div>
			<div class="meio wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="1.2s" id="">
				<input required type="text" name="email" placeholder="E-mail">
			</div>
			<div class="meio wow bounceInRight" style="float:right;visibility: visible; animation-name: bounceInRight;" data-wow-duration="1.5s">
				<input required type="text" name="telefone" placeholder="Telefone ou Cel">
			</div>
			<div class="full wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="1.7s" id="">
				<input required type="text" name="assunto" placeholder="Assunto">
			</div>
			<div class="full wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="2s" id="">
				<textarea required name="mensagem" placeholder="Mensagem"></textarea>
			</div>
			<span>*Obrigatório preencher todos os campos</span>
			<button type="submit" class="saiba_mais botao _tr" name="" value="">Enviar</button>
		</form>
	</div>
</section>