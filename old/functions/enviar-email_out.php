<?php
	
	$mail = new SimpleMail();

	if(!empty($_POST)):
		foreach($_POST as $nome_campo => $valor):
			$comando = "\$".$nome_campo."='".$valor."';";
			eval($comando);
			$complemento .= "&".$nome_campo."=".$valor;
		endforeach;
	endif;

	/* Preventive measure to prevent other domains are sending your message. */
	if (eregi('tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$|publiccloud.com.br$', $_SERVER[HTTP_HOST])) {
	        $emailsender='mauricio@tooc.ag'; // Substitua essa linha pelo seu e-mail@seudominio
	} else {
	        $emailsender = "mauricio@" . $_SERVER[HTTP_HOST];
	        // In the above line we are stressing that the sender is webmaster @ yourdomain '
			// You can change so that the sender is, for example, 'contact @ yourdomain'.
	}
	 
	/* Checks What is the server operating system to set the header properly. */
	if(PATH_SEPARATOR == ";") 
		$quebra_linha = "\r\n"; 
	else
		$quebra_linha = "\n";
	 
	include 'includes/email-html.php';
		 

	$headers = "MIME-Version: 1.1" .$quebra_linha;
	$headers .= "Content-type: text/html; charset=utf-8" .$quebra_linha;
	$headers .= "From: " . $emailsender.$quebra_linha;
	$headers .= "Reply-To: " . $emailremetente . $quebra_linha;	 
	/* Send Message */
	if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ 
	    $headers .= "Return-Path: " . $emailsender . $quebra_linha; //
	    mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
	    echo '<script>$(document).ready(function(){modal("sucesso","Enviar email","Seu email foi enviado com sucesso!","Fechar","'.$base.'/home");});</script>';
	}

?>

