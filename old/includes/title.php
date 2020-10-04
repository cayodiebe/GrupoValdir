<?php 
	echo 'Valdir';
	//Se não existe o get ou ele é nulo, não escreve.
	if(!isset($get) || $get == null):
		echo ' - Página Inicial';
	else:
		//Traz a página de acordo com o GET
		switch($get[0]) {
			default: echo ' - Página Inicial'; break; 
			case 'home':  echo " - Página Inicial"; break; 
			case 'contato':  echo " - Contato"; break; 
			case 'login':  echo " - Fazer Login"; break; 
			case 'servicos':  echo " - Serviços"; break; 
			case 'sobre':  echo " - Sobre"; break; 
			case 'projetos':  echo " - Projetos"; break; 
			case 'status-projeto':  echo " - Status do Projeto"; break; 
		}
	endif;
?>