<?php 
	# Includes
    require ('../editar/configuracoes.inc.php');
	require ('../functions/db_connect.inc.php');
	require ('pdf.class.php');

	# Objeto
	$pdf = new PDF();

	if(!empty($_GET) && isset($_GET['id'])):
		# ID do Pedido
		$idPedido = $_GET['id'];
		# Busca informações do pedido
		$sqlPedido = mysql_query("SELECT * FROM user_pedidos WHERE id = '$idPedido'");
		$numPedido = mysql_affected_rows();
		if($numPedido > 0):
			$dadosPedido = mysql_fetch_array($sqlPedido);
			$idCamisas = $pdf->retornaCamisasID($idPedido);
		else:
			echo "Nenhum registro encontrado.";
			exit;
		endif;
	endif;
?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title>Controle de Pedido</title>
	<link rel="stylesheet" href="../../assets/css/fonts.css">
	<link rel="stylesheet" href="../../assets/css/reset.css">
	<link rel="stylesheet" href="../../assets/css/grids-15.css">
	<link rel="stylesheet" href="pdf.css">
	<script src="../../assets/js/jquery-1.11.0.min.js"></script>
</head>
<body>
	<?php
		# Loop pelas camisas do pedido
		foreach($idCamisas as $idCamisa):
			$dadosCamisa = $pdf->retornaCamisa($idCamisa);
			# Busca dados do Usuário
			$idUsuario = $dadosPedido['id_user'];
			$dadosUsuario = $pdf->retornaUsuario($idUsuario);
	?>
			<header style="margin-bottom:100px;">
				<div class="col3">
					<img src="../../assets/images/css/logo2.png" alt="Camisaria 1818">
				</div>
				<div class="col12 nopad">
					<h1>FICHA DE PEDIDO</h1>
					<div class="box">CONTROLE DE PEDIDO</div>
				</div>
				<div class="clearfloat"></div>

				<div class="um-quarto2">Nº DO PEDIDO:<br><?= $pdf->respostaTexto($dadosPedido['id']); ?></div>
				<div class="um-quarto2">Nº DO CLIENTE:<br><?= $pdf->respostaTexto($dadosPedido['id_user']); ?></div>
				<div class="um-quarto">NOME DO CLIENTE:<br><?= $pdf->respostaTexto($dadosUsuario['nome_completo']); ?></div>
				<div class="um-quarto">DATA DO PEDIDO:<br><?= $pdf->respostaData($dadosPedido['data']); ?></div>
				<div class="clearfloat"></div>

				<div class="box">MODELAGEM E CORTE</div>
				<div class="um-quinto">RESPONSÁVEL:<br>_______________</div>
				<div class="um-quinto">DATA DA RECEB.:<br>____/_____/_____</div>
				<div class="um-quinto">CONCLUSÃO:<br>____/_____/_____</div>
				<div class="um-quinto">RETIRADA:<br>____/_____/_____</div>
				<div class="um-quinto">VISTO:<br>________________</div>
				<div class="clearfloat"></div>

				<div class="box">COSTURA</div>
				<div class="um-quinto">RESPONSÁVEL:<br>_______________</div>
				<div class="um-quinto">DATA DA RECEB.:<br>____/_____/_____</div>
				<div class="um-quinto">CONCLUSÃO:<br>____/_____/_____</div>
				<div class="um-quinto">RETIRADA:<br>____/_____/_____</div>
				<div class="um-quinto">VISTO:<br>________________</div>
				<div class="clearfloat"></div>

				<div class="box">ACABAMENTO</div>
				<div class="um-quinto">RESPONSÁVEL:<br>_______________</div>
				<div class="um-quinto">DATA DA RECEB.:<br>____/_____/_____</div>
				<div class="um-quinto">CONCLUSÃO:<br>____/_____/_____</div>
				<div class="um-quinto">RETIRADA:<br>____/_____/_____</div>
				<div class="um-quinto">VISTO:<br>________________</div>
				<div class="clearfloat"></div>

				<div class="box">ENTREGA</div>
				<div class="um-quinto">RESPONSÁVEL:<br>_______________</div>
				<div class="um-quinto">DATA DA RECEB.:<br>____/_____/_____</div>
				<div class="um-quinto">CONCLUSÃO:<br>____/_____/_____</div>
				<div class="um-quinto">RETIRADA:<br>____/_____/_____</div>
				<div class="um-quinto">VISTO:<br>________________</div>
				<div class="clearfloat"></div>

				<div class="box"><pre> </pre></div>
				<div class="clearfloat"></div>

				<table border="1" class="medidas">
					<thead>
						<tr><th width="55%">MEDIDA:</th><th width="22%">ORIG.:</th><th width="23%">AJUST.:</th></tr>
					</thead>
					<tbody>
						<tr>
							<td>COLARINHO</td>
							<td></td>
							<td><?= $pdf->respostaMedidas($dadosPedido['me_colarinho']); ?></td>
						</tr>
						<tr>
							<td>TORAX</td>
							<td></td>
							<td><?= $pdf->respostaMedidas($dadosPedido['me_torax']); ?></td>
						</tr>
						<tr>
							<td>CINTURA</td>
							<td></td>
							<td><?= $pdf->respostaMedidas($dadosPedido['me_cintura']); ?></td>
						</tr>
						<tr>
							<td>QUADRIL</td>
							<td></td>
							<td><?= $pdf->respostaMedidas($dadosPedido['me_quadril']); ?></td>
						</tr>
						<tr>
							<td>BRAÇO</td>
							<td></td>
							<td><?= $pdf->respostaMedidas($dadosPedido['me_braco']); ?></td>
						</tr>
						<tr>
							<td>PUNHO</td>
							<td></td>
							<td><?= $pdf->respostaMedidas($dadosPedido['me_punho']); ?></td>
						</tr>
						<tr>
							<td>COSTAS</td>
							<td></td>
							<td><?= $pdf->respostaMedidas($dadosPedido['me_ombro']); ?></td>
						</tr>
						<tr style="height:20px;">
							<td>OMBRO</td>
							<td></td>
							<td><?= $pdf->respostaMedidas($dadosPedido['me_ombro']); ?></td>
						</tr>
						<tr>
							<td>COMP. MANGA</td>
							<td></td>
							<td><?= $pdf->respostaMedidas($dadosPedido['me_manga']); ?></td>
						</tr>
						<tr>
							<td>COMP. CORPO FRENTE</td>
							<td></td>
							<td><?= $pdf->respostaMedidas($dadosPedido['me_frontal']); ?></td>
						</tr>
						<!--
						<tr>
							<td>COMP. CORPO TRÁS</td>
							<td></td>
							<td><?= $pdf->respostaMedidas($dadosPedido['me_traseiro']); ?></td>
						</tr>
						-->
					</tbody>
				</table>

				<div class="info">
					<table width="100%">
						<tbody>
							<tr>
								<td><b>MODELAGEM:</b><br><?= $pdf->respostaTexto($dadosCamisa['modelo'],false); ?></td>
								<td><b>PESPONTO:</b><br><?= $pdf->respostaTexto($dadosCamisa['acabamento_do_colarinho_e_punho'],false); ?></td>
								<td><b>COMP. CAMISA:</b><br><?= $pdf->respostaTexto($dadosCamisa['comprimento'],false); ?></td>
							</tr>
							<tr>
								<td><b>COMP. MANGA:</b><br><?= $pdf->respostaTexto($dadosCamisa['comprimento_da_manga'],false); ?></td>
								<td><b>BOLSO:</b><br><?= $pdf->respostaTexto($dadosCamisa['bolso'],false); ?></td>
								<td><b>MONOGRAMA:</b><br><?= $pdf->respostaTexto($dadosCamisa['iniciais'],false); ?></td>
							</tr>
							<tr>
								<td><b>COLARINHO:</b><br><?= $pdf->respostaTexto($dadosCamisa['colarinho'],false); ?></td>
								<td><b>VISTA:</b><br><?= $pdf->respostaTexto($dadosCamisa['vista'],false); ?></td>
								<td><b>BARBATANAS:</b><br>Sim</td>
							</tr>
							<tr>
								<td><b>RIGIDEZ DO COLAR:</b><br><?= $pdf->respostaTexto($dadosCamisa['rigidez_do_colarinho_e_punho'],false); ?></td>
								<td><b>PUNHO:</b><br><?= $pdf->respostaTexto($dadosCamisa['punho'],false); ?></td>
								<td class="nopad">
									<div class="pad">
										<b>PENSE:</b><br>Sim
									</div>
									<hr>
									<div class="pad">
										<b>PREGA PALA:</b><br>Não
									</div>
								</td>
							</tr>
						</tbody>
					</table>

					<div class="box" style="margin-top:10px;">OBSERVAÇÕES GERAIS</div>

					<div class="observacoes">
					</div>
				</div>
				<div class="clearfloat"></div>
			</header>

	<?php
		endforeach;
	?>

	<script>
		$(window).load(function(){
			window.print();
			window.onfocus=function(){ window.close();}
		});
	</script>
</body>
</html>


<iframe src="http://tooc.ag/projetos/KITE/in49/" height="100%"></iframe>