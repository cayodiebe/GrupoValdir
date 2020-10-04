<?php 
	//MELHORAR PARA RETIRAR QUANDO NAO FOR STRING DE BUSCA
	if(!isset($_POST['garimpo']) || $_POST['garimpo'] == "" ):
		header("Location: ".$base." ");
	endif;

?>