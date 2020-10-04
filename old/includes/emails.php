<?php 
	
	#Email within the server
	if(isset($_POST['tipo']) ):
        $mail_nome = "Nome";
        $mail_email = "mauricio@tooc.ag";
        $mail_assunto = "Contato";
        $mail_remove_campos = array("tipo","enviar");
        $logotipo = "assets/images/logo.png";
        include("functions/enviar-email.php");
    endif;


    #Email to another server
    if(isset($_POST['tipo']) ):
        $nomeremetente     = 'Toocano';
        $emailremetente    = 'mauricio@tooc.ag';
        $emaildestinatario = 'cmtstrm010@gmail.com';
        $assunto           = 'Assunto';  
        $mail_remove_campos = array("tipo","enviar");
        $logotipo = "assets/images/logo.png";
        include("functions/enviar-email_out.php");
    endif;

?>
