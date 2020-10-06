

<?php $n = $c->getResult("numeros","WHERE id = '1'"); ?>

<div class="numeros">

	<div class="limitador">

		<div class="cada">

			<h2  class="titulo"><?=$n['n1_titulo'];?></h2>

			<span><?=$n['n1_texto'];?></span>

		</div>

		<div class="cada">

			<h2 class="titulo"><?=$n['n2_titulo'];?></h2>

			<span><?=$n['n2_texto'];?></span>

		</div>

		<div class="cada">

			<h2 class="titulo"><?=$n['n3_titulo'];?></h2>

			<span><?=$n['n3_texto'];?></span>

		</div>

		<div class="cada">

			<h2 class="titulo"><?=$n['n4_titulo'];?></h2>

			<span><?=$n['n4_texto'];?></span>

		</div>

	</div>

</div>