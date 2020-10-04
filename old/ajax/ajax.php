<?php 

	# Configuracoes
    require_once("../functions/configuracoes.inc.php");

    # Classes
    require_once("../class/functions.class.php");
    #require_once("../includes/connect.php");
    #require_once("../class/mail.class.php");
    #require_once("../class/banco.class.php");
    #require_once("../class/bean.php");

    # Objetos
    $functions = new general_functions();
    #$mail = new SimpleMail();
    #$banco = new Consultas($db);

    # Segurança
    $_GET = $functions->_antiSqlInjection($_GET);
    $_POST = $functions->_antiSqlInjection($_POST);

    //Seleciona a ação
	$acao = $_POST['acao'];
    if( isset($_FILES["files"]["name"]) ):
        $acao = 'upload-file';      
    endif;


    switch ($acao) {
        case 'email':
            echo '1';

            break;
        case 'upload-file':

            $file_name = $_FILES["files"]["name"][0];
            $ext = explode('.',$file_name );
            $file_name = md5(uniqid(time())) . "." . $ext[1];
            
            $arquivo =  $_FILES["files"]["tmp_name"][0];
            $ret = move_uploaded_file($arquivo,$file_name);
            // while ($ret == false) {
            //     $ret = move_uploaded_file($_FILES['files']["tmp_name"],"assets/images/".$file_name);
            // }
  //          echo $ret;
            break;

        case 'trazSlug':
                $texto = $_POST['texto'];
                echo $functions->gerarUrl($texto);
            break;
    }
   

?>