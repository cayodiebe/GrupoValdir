<?php 

	

	$slug_servico = $get[1];

	$servico = $c->getResult("servicos","WHERE slug = '$slug_servico'");



?>



<?php include("includes/header.php"); ?>





<div class="servicos">

	<div class="limitador">



		<a onclick="window.history.go(-1); return false;" class="voltar">

			<div class="btn"><i class="fa fa-angle-left"></i> Voltar</div>

		</a>

			

		<div class="cada">

			<div class="imagem _bc" style="background: url(<?=BASE_SITE;?>assets/images/<?=$servico['imagem'];?>) no-repeat center center;"></div>

			<div class="textos">

				<div class="titulo"><?=$servico['titulo'];?></div>

				<div class="texto">

					<?=$servico['texto'];?>

				</div>

				<a href="<?=BASE_SITE;?>contato">

					<div class="btn">Solicitar orçamento</div>

				</a>

			</div>

		</div>



	</div>

</div>





<?php include("includes/orcamento.php"); ?>



<?php include("includes/footer.php"); ?>





