<?php 
    # Configurações
    date_default_timezone_set("America/Sao_Paulo");

    # Site
    define("NOME_SITE","Projeto Padrão");
    define("BASE_SITE","http://".$_SERVER['HTTP_HOST'].substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'/')+1));
    define("EMAIL_SITE","pablo@musca.org");
    define("BASE_CORE","./");

    # Banco de Dados
    define("DB_HOST_2","localhost");
    define("DB_USER_2","root");
    define("DB_PASS_2","");
    define("DB_NAME_2","projeto_padrao");

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