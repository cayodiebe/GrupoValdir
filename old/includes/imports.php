<?php 
	# OB
	ob_start();
	# Inicio da sessão
	session_start();

	# Configuracoes
	require_once("functions/configuracoes.inc.php");

	# Classes
	require_once("class/functions.class.php");
	require_once("includes/connect.php");
	require_once("class/banco.class.php");
	require_once("class/bean.php");

	# Objetos
	$functions = new general_functions();
	$banco = new Consultas($db);

	# Segurança
	$_GET = $functions->_antiSqlInjection($_GET);
	$_POST = $functions->_antiSqlInjection($_POST);

	# Pega a URL e divide
	$get[0] = 'home';
	if(isset($_GET["get"])){
		$get = explode("/", $_GET["get"]);
	}
	// $_SESSION['id'] = 0;
	// $_SESSION["login"] = false;

	// error_reporting(1);
?>