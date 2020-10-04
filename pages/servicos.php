<?php 

	$categorias = $c->getResults("categorias","ORDER BY id ASC");

	if( !isset($get[1]) ){
		header("Location: ".BASE_SITE."servicos/".$categorias[0]['slug']);
	}

	$slug_categoria = $get[1];
	$categoria = $c->getResult("categorias","WHERE slug = '$slug_categoria'");
	$id_categoria = $categoria['id'];

	$servicos = $c->getResults("servicos","WHERE categoria = '$id_categoria' ORDER BY id ASC");

?>

<?php include("includes/header.php"); ?>

<div class="limitador">
	<div class="menu_servicos">
		<ul>
			<?php foreach($categorias as $categoria): ?>
				<li class="<?=($get[1]==$categoria['slug'] ? 'ativo' : '');?>"><a href="<?=BASE_SITE;?>servicos/<?=$categoria['slug'];?>"><?=$categoria['nome'];?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>

<div class="servicos">
	<div class="limitador">

		<?php if( count($servicos) == 0 ): ?>
			<div class="semresultado">
				Nenhum resultado encontrado 
				<i class="far fa-sad-cry"></i>
			</div>
		<?php endif; ?>
			
		<?php foreach($servicos as $servico): ?>
			<div class="cada">
				<div class="imagem _bc" style="background: url(<?=BASE_SITE;?>assets/images/<?=$servico['imagem'];?>) no-repeat center center;"></div>
				<div class="textos">
					<div class="titulo"><?=$servico['titulo'];?></div>
					<div class="texto">
						<?=$f->limitaTexto($servico['texto'],170);?>
					</div>
					<a href="<?=BASE_SITE;?>servico/<?=$servico['slug'];?>">Ler mais</a>
					<a href="<?=BASE_SITE;?>contato">
						<div class="btn">Solicitar orçamento</div>
					</a>
				</div>
			</div>
		<?php endforeach; ?>

	</div>
</div>


<?php include("includes/orcamento.php"); ?>

<?php include("includes/footer.php"); ?>


