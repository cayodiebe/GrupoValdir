<?php 
	
	$mensagemHTML = '
	<html>
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
		    	<td style="font:10px Arial, Helvetica, sans-serif; text-align:center; padding:10px; color:#697a84;">E-mail enviado às '.date('H:i:s (d/m/Y)').'</td>
		    </tr>
		</table>
	</body>
	</html>';

?>
