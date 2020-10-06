



<?php include("includes/header.php"); ?>





<?php $banners = $c->getResults("home_banners","ORDER BY id DESC"); ?>

<div class="banners">

	<?php foreach($banners as $banner): ?>

		<div class="cada">

			<img src="<?=BASE_SITE;?>assets/images/<?=$banner['imagem'];?>" class="show-desktop hide-phone">

			<img src="<?=BASE_SITE;?>assets/images/<?=$banner['imagem_mobile'];?>" class="hide-desktop show-phone">

		</div>

	<?php endforeach; ?>

</div>



<?php $inicio = $c->getResult("quemsomos_inicio","WHERE id = '1'"); ?>

<div class="quemsomos">

	<div class="limitador">

		<div class="lado1">

			<img src="<?=BASE_SITE;?>assets/images/<?=$inicio['imagem'];?>" class="imgQuemSomos">

		</div>

		<div class="lado2">

			<div class="titulo"><?=$inicio['titulo'];?></div>

			<div class="texto">

				<?=$inicio['texto'];?>

			</div>	

		</div>

	</div>

</div>





<?php include("includes/numeros.php"); ?>



<?php $servicos = $c->getResults("servicos","ORDER BY id ASC"); ?>

<div class="solucoes">

	<div class="limitador">

		<h1 class="tituloS">Nossas soluções</h1>

		<div class="todas">

			<?php foreach($servicos as $servico): ?>

				<div class="cada">

					<div class="imagem _bc" style="background: url(<?=BASE_SITE;?>assets/images/<?=$servico['imagem'];?>) no-repeat center center;"></div>

					<div class="titulo"><?=$servico['titulo'];?></div>

					<a href="<?=BASE_SITE;?>servico/<?=$servico['slug'];?>">

						<div class="btn">Saiba mais</div>

					</a>

				</div>

			<?php endforeach; ?>

		</div>

	</div>

</div>


<?php include("includes/orcamento.php"); ?>



<?php include("includes/footer.php"); ?>





