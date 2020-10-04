<?php 
    
    $contato = new Contato($banco->getContato());
    #Email to another server
    // if(isset($_POST['tipo']) ):
    $email_from    = $_POST['email'];
    // $email_to = $contato->getemail_destino();
    $email_to = 'mauricio.silva.ufscar@gmail.com';
    $mail_assunto = $_POST['assunto'];
    $mail_remove_campos = array("submit","enviar");
    $logotipo = "assets/images/logo.png";
    // endif;

    if(!empty($_POST)):
        foreach($_POST as $nome_campo => $valor):
            $comando = "\$".$nome_campo."='".$valor."';";
            eval($comando);
            $complemento .= "&".$nome_campo."=".$valor;
        endforeach;
    endif;

    $mensagemHTML = '
    <html>
    <meta charset="UTF-8">
    <body style="padding:0; margin:0; height:100%;" bgcolor="#353f47">
        <center><img src="'.$base.$logotipo.'" width="200" border="0" style="margin-top:20px;"></center>
        <table style="border:1px solid #272f56; background-color:#fff;-moz-border-radius:7px; -webkit-border-radius:7px; width:600px; border:1px solid #E2E0E0; margin-top:20px;" align="center">
            <tr>
                <td style="padding:20px;">
                    <table width="100%" style="font:12px Arial, Helvetica, sans-serif; border-collapse:collapse;">';
                        foreach($_POST as $nome_campo => $valor):
                            if(!in_array($nome_campo,$mail_remove_campos)):
                                $comando = "\$".$nome_campo."='".$valor."';";
                                eval($comando);
                                $complemento .= "&".$nome_campo."=".$valor;
                                if($valor <> ''):
                                    $mensagemHTML .= '
                                        <tr>
                                            <td style="padding:3px; border-bottom:1px solid #c9d1d5; color:#697a84;">'.ucfirst(strtolower($nome_campo)).':</td>
                                            <td style="padding:3px; border-bottom:1px solid #c9d1d5; color:#666666;">'.$valor.'</td>
                                        </tr>
                                    ';
                                endif;
                            endif;
                        endforeach;
    $mensagemHTML .= '
                    </table>
                </td>
            </tr>
            <tr>
                <td style="font:10px Arial, Helvetica, sans-serif; text-align:center; padding:10px; color:#697a84;">E-mail enviado &agrave;s '.date('H:i:s (d/m/Y)').'</td>
            </tr>
        </table>
    </body>
    </html>';


    // O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
    // O return-path deve ser ser o mesmo e-mail do remetente.
    $headers = "MIME-Version: 1.1\n";
    $headers .= "Content-type: text/html; charset=UTF-8\n";
    $headers .= "From: ".$email_from."\n"; // remetente
    $headers .= "Return-Path: ".$email_to."\n"; // return-path
    $envio = mail($email_to, $mail_assunto, $mensagemHTML, $headers,"-r".$email_to);

?>
<script>
    alert("Mensagem enviado com sucesso.");
    window.location = 'contato';
</script>