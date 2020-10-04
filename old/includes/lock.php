<?php 
	
	//Prevents access to a page
	if(!$_SESSION["login"] || $_SESSION["login"] == false ):
		header('Location: login');
	endif;

?>