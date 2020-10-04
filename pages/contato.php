

<?php include("includes/header.php"); ?>


<div class="contato">
	<div class="limitador">
		<h1>Em que podemos te ajudar?</h1>
		<h4>Preencha o formulário de solicitação de orçamento e nossos consultores entrarão em contato.</h4>

		<form action="" method="POST">
			<input type="text" name="nome" placeholder="Nome:" required>
			<input type="text" name="sobrenome" placeholder="Sobrenome:" required>
			<input type="text" name="empresa" placeholder="Empresa:" required>
			<input type="text" name="cargo" placeholder="Cargo:" required>
			<input type="text" name="email" placeholder="E-mail corporativo:" required>
			<input type="text" name="telefone" placeholder="Telefone corporativo:" required>
			<textarea name="mensagem" placeholder="Em que podemos te ajudar?" required></textarea>
			<button type="submit" name="contato">Solicitar orçamento</button>
		</form>
		
	</div>
</div>


<?php include("includes/orcamento.php"); ?>

<?php include("includes/footer.php"); ?>


