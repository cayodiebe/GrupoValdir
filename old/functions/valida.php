<?php 
	
	#User data
	$decode = false;
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	// This function performs normal login without performing encode or decode password
	if(!$decode):
		// Check the database exists that user
		$dado = $banco->getLoginNormal($login,$senha); 

		// If there is a user, arrow session variables and logs the user
		if( isset($dado['login']) && isset($dado['senha']) && $dado['login'] == $login && $dado['senha'] == $senha ){
			//$_SESSION["login"] = $_POST['nome'];
			$_SESSION["login"] = true;
			$_SESSION["nome"] = $login;
			$_SESSION["id"] = $dado['id'];
			header('Location: status-projeto');
			
		}
		// If the user does not exist, redirect to the login page
		else{
			$_SESSION["login"] = false;
			header("Location: login/erro");
		}
	else:// This function performs login with password decoding, performing password decode
		// Check The bench is no such uauário
		$dado = $banco->getLoginDecode($login,$senha); 	

		// If there is a user, arrow session variables and logs the user
		if( isset($dado['login']) && isset($dado['senha']) && $dado['login'] == $login && $dado['senha'] == $functions->aes($senha,'encode') ){
			$_SESSION["login"] = true;
			$_SESSION["nome"] = $login;
			header('Location: logged');
			
		}
		else{// If there is a user, arrow session variables and logs the user...
			$_SESSION["login"] = false;
			echo '	<script>$(document).ready(function(){
						modal("erro","Login","Usuário ou senha inválido!","Fechar","'.$base.'/login");
					});</script>';
		}

	endif;

 ?>