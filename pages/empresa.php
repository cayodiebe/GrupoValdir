<?php 

	$inicio = $c->getResult("quemsomos_inicio","WHERE id = '1'");
	$mvv = $c->getResult("quemsomos_mvv","WHERE id = '1'");
	$seguranca = $c->getResult("quemsomos_seguranca","WHERE id = '1'");


?>

<?php include("includes/header.php"); ?>


<div class="quemsomos">
	<div class="limitador">
		<div class="lado1">
			<img src="<?=BASE_SITE;?>assets/images/<?=$inicio['imagem'];?>">
		</div>
		<div class="lado2">
			<div class="titulo"><?=$inicio['titulo'];?></div>
			<div class="texto">
				<?=$inicio['texto'];?>
			</div>	
		</div>
	</div>
</div>


<div class="mvv">
	<div class="limitador">
		<div class="cada">
			<img src="<?=BASE_SITE;?>assets/images/<?=$mvv['missao_icone'];?>" class="centerR">
			<h3><?=$mvv['missao_titulo'];?></h3>
			<span><?=$mvv['missao_texto'];?></span>
		</div>
		<div class="cada">
			<img src="<?=BASE_SITE;?>assets/images/<?=$mvv['visao_icone'];?>" class="centerR">
			<h3><?=$mvv['visao_titulo'];?></h3>
			<span><?=$mvv['visao_texto'];?></span>
		</div>
		<div class="cada">
			<img src="<?=BASE_SITE;?>assets/images/<?=$mvv['valores_icone'];?>" class="centerR">
			<h3><?=$mvv['valores_titulo'];?></h3>
			<span><?=$mvv['valores_texto'];?></span>
		</div>
	</div>
</div>

<?php include("includes/numeros.php"); ?>

<div class="seguranca">
	<div class="limitador">
		<div class="titulo"><?=$seguranca['titulo'];?></div>
		<div class="texto">
			<?=$seguranca['texto'];?>
		</div>
		<div class="todos">
			<?php if($seguranca['imagem1']<>''): ?>
				<div class="cada"><img src="<?=BASE_SITE;?>assets/images/<?=$seguranca['imagem1'];?>" class="centerAll"></div>
			<?php endif; ?>
			<?php if($seguranca['imagem2']<>''): ?>
				<div class="cada"><img src="<?=BASE_SITE;?>assets/images/<?=$seguranca['imagem2'];?>" class="centerAll"></div>
			<?php endif; ?>
			<?php if($seguranca['imagem3']<>''): ?>
				<div class="cada"><img src="<?=BASE_SITE;?>assets/images/<?=$seguranca['imagem3'];?>" class="centerAll"></div>
			<?php endif; ?>
			<?php if($seguranca['imagem4']<>''): ?>
				<div class="cada"><img src="<?=BASE_SITE;?>assets/images/<?=$seguranca['imagem4'];?>" class="centerAll"></div>
			<?php endif; ?>
			<?php if($seguranca['imagem5']<>''): ?>
				<div class="cada"><img src="<?=BASE_SITE;?>assets/images/<?=$seguranca['imagem5'];?>" class="centerAll"></div>
			<?php endif; ?>
			<?php if($seguranca['imagem6']<>''): ?>
				<div class="cada"><img src="<?=BASE_SITE;?>assets/images/<?=$seguranca['imagem6'];?>" class="centerAll"></div>
			<?php endif; ?>
			<?php if($seguranca['imagem7']<>''): ?>
				<div class="cada"><img src="<?=BASE_SITE;?>assets/images/<?=$seguranca['imagem7'];?>" class="centerAll"></div>
			<?php endif; ?>
			<?php if($seguranca['imagem8']<>''): ?>
				<div class="cada"><img src="<?=BASE_SITE;?>assets/images/<?=$seguranca['imagem8'];?>" class="centerAll"></div>
			<?php endif; ?>			
		</div>
	</div>
</div>

<?php include("includes/orcamento.php"); ?>
<?php include("includes/footer.php"); ?>