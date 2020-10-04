<?php
    ## Inicia Sessão ##
    session_start();

    ## OB ##
    ob_start();

    ## Configuracoes ##
    include(dirname( __FILE__ )."/config.php");
    
    ## Classes ##
    require_once("class/Functions.class.php");
    require_once("includes/database.inc.php");
    require_once("class/Consultas.class.php");

    ## Objetos ##
    $f = new Functions($db);
    $c = new Consultas($db);

    ## Segurança ##
    $_GET = $f->_antiSqlInjection($_GET);
    $_POST = $f->_antiSqlInjection($_POST);

    ## URL Amigável ##
    if(isset($_GET['url'])):
        $get2 = $_GET['url'];
        $get  = explode("/",$get2);
    endif;

    ## Gera todos os $_GET de uma url absoluta ##
    @$f->gets($f->getUrl());
?>
<?php include("includes/acsii.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <base href="<?=BASE_SITE?>" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />
    <title><?=NOME_SITE?></title>
    <meta name="author" content="<?=AUTOR_SITE?>">

    <?php include("includes/seo.inc.php"); ?>

    <script src="<?=BASE_SITE;?>assets/js/jquery-1.11.0.min.js"></script>

    <link rel="stylesheet" href="<?=BASE_SITE;?>assets/css/hover-min.css">
    <link rel="stylesheet" href="<?=BASE_SITE;?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?=BASE_SITE;?>assets/css/_reset.css">
    <link rel="stylesheet" href="<?=BASE_SITE;?>assets/css/main.css">
    <link rel="stylesheet" href="<?=BASE_SITE;?>assets/css/lightbox.css">
    <link rel="stylesheet" href="<?=BASE_SITE;?>assets/css/animate.css">
    <link rel="stylesheet" href="<?=BASE_SITE;?>assets/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?=BASE_SITE;?>assets/owl-carousel/owl.theme.css">

    <script src="<?=BASE_SITE;?>assets/js/scrollReveal.js"></script>
    <script src="<?=BASE_SITE;?>assets/js/lightbox.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;800&display=swap" rel="stylesheet"> <!-- GOOGLE FONTS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css"> <!-- FONT AWESOME ICONS -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>



	<?php 
		## E-mail padrao ##
	    if(isset($_POST['contato'])):
	        $mail_nome = $_POST['nome'];
	        $mail_email = $_POST['email'];
	        $mail_assunto = '[Contato via Site]';
            $mail_nome_to = NOME_SITE;
            $mail_email_to = 'gpvaldir.comercial01@hotmail.com';
	        $mail_remove_campos = array("contato");
	        $logotipo = BASE_SITE."assets/images/logo.png";
	        include("functions/enviar-email.php");
	    endif;

	    ## Páginas ## 
		if(isset($get[0])){
            switch($get[0]):
                default:
                    $arquivo = "pages/".$get[0].".php";
                    if(file_exists($arquivo)):
                        include $arquivo;
                    else:
                        if(file_exists("includes/404.php")):
                            include "includes/404.php";
                        else:
                            echo "<h1>Página não encontrada.</h1><h2>Erro 404</h2>";
                        endif;
                    endif;
                break;
            endswitch;
        }else{
        	include "pages/home.php";
        }
    ?>



    <!-- Scripts -->
    <script type="text/javascript">var BASE_SITE = "<?=BASE_SITE;?>";</script>
    <script src="<?=BASE_SITE;?>assets/owl-carousel/owl.carousel.js"></script>
    <!-- <script src="<?=BASE_SITE;?>assets/js/wow.min.js"></script> -->
    <script src="<?=BASE_SITE;?>assets/js/main.js"></script>

</body>
</html>
<?php 
    ob_end_flush();
?>