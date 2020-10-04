<?php 
	//If the page does not exist, brings HOME
	if(!isset($get) || $get == null):
		include "pages/home.php";
	else:
		// Brings the page according to the URL
		switch($get[0]) {
			default: include "includes/404.php"; break;
			
			#Functions
			case 'valida': 		include "functions/valida.php"; break;
			case 'solicitar-orcamento': 	include "functions/orcamento.php"; break;
			case 'solicitar-contato': 	include "functions/contato.php"; break;

			#Pages
			case 'home': include "pages/home.php"; break;
			case 'contato': include "pages/contato.php"; break;
			case 'login': include "pages/login.php"; break;
			case 'servicos': include "pages/servicos.php"; break;
			case 'sobre': include "pages/sobre.php"; break;
			case 'projetos': include "pages/projetos.php"; break;
			case 'status-projeto': include "pages/status-projeto.php"; break;			
			
		}
	endif;
?>