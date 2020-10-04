<?php 

	$clientes = $c->getResults("clientes","ORDER BY id ASC");

?>

<?php include("includes/header.php"); ?>


<div class="clientes">
	<div class="limitador">
		<h1>Eles confiam no Grupo Valdir</h1>
		<div class="todos">
			<?php foreach($clientes as $cliente): ?>
				<?php if($cliente['link']<>''): ?>
					<a href="<?=$cliente['link'];?>">
						<div class="cada"><img src="<?=BASE_SITE;?>assets/images/<?=$cliente['imagem'];?>" class="centerAll"></div>
					</a>
				<?php else: ?>
					<div class="cada"><img src="<?=BASE_SITE;?>assets/images/<?=$cliente['imagem'];?>" class="centerAll"></div>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
		<h1>E mais de 600 clientes!</h1>
	</div>
</div>


<?php include("includes/orcamento.php"); ?>

<?php include("includes/footer.php"); ?>


