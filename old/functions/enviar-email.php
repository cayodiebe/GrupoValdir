<?php 
	$mail = new SimpleMail();

	if(!empty($_POST)):
		foreach($_POST as $nome_campo => $valor):
			$comando = "\$".$nome_campo."='".$valor."';";
			eval($comando);
			$complemento .= "&".$nome_campo."=".$valor;
		endforeach;
	endif;

	include 'includes/email-html.php';

    $mail->setTo($mail_email, $mail_nome)
         ->setSubject($mail_assunto)
         ->setFrom($mail_email, $_POST['nome'])
         ->addMailHeader('Reply-To', $_POST['email'], $_POST['nome'])
         ->addGenericHeader('X-Mailer', 'PHP/' . phpversion())
         ->addGenericHeader('Content-Type', 'text/html; charset="utf-8"')
         ->setMessage($mensagemHTML)
         ->setWrap(100);

	$send = $mail->send();
	echo ($send) ? '<script type="text/javascript">$(document).ready(function(){modal("sucesso","Enviar email","Seu email foi enviado com sucesso!","Fechar","'.$base.'/home");});</script>' : '<script type="text/javascript">$(document).ready(function(){modal("erro","Enviar email","Ocorreu um erro ao enviar o email, tente novamente mais tarde!","Fechar","'.$base.'/home");});</script>';
?>