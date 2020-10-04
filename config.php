<?php 
    # Configurações
    date_default_timezone_set("America/Sao_Paulo");

    # Site
    define("NOME_SITE","Grupo Valdir");
    define("BASE_SITE","http://".$_SERVER['HTTP_HOST'].substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'/')+1));
    define("EMAIL_SITE","pablo@musca.org");
    define("BASE_CORE","./");

    # Banco de Dados
    define("DB_HOST_2","localhost");
    define("DB_USER_2","valdirpi_root");
    define("DB_NAME_2","valdirpi_novo");
    define("DB_PASS_2","7647990");

    # Quem fez o site?
    define("AUTOR_SITE","Agência Musca.org");


    # Ativa todos os debugs de erros
    $erros = false;

    if($erros){
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
        ini_set("display_startup_errors", 1);
    }else{
        error_reporting(0);
        ini_set("display_errors", 0);
        ini_set("display_startup_errors", 0);
    }
?>