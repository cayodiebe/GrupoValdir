<?php 
	# GET
	if(isset($_GET['id']) && $_GET['id'] <> ''):
		$idPedido = $_GET['id'];
		$nomeArquivo = "Controle_de_Pedidos--Pedido_".$idPedido."--".date("d-m-Y").".xls";
	else:
		$idPedido = false;
		$nomeArquivo = "Controle_de_Pedidos--".date("d-m-Y").".xls";
	endif;

	# Header .xls
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=".$nomeArquivo);
	$dataExpirar = time() + 30;
	$headerExpirar = "Expires: ".gmdate("D, d M Y G:i:s",$dataExpirar)." GMT";
	header($headerExpirar);

	# Includes
    require ('../editar/configuracoes.inc.php');
	require ('../functions/db_connect.inc.php');
	require ('excel.class.php');

	# Objeto
	$excel = new Excel();

	# Dados
	$dadosTabela = $excel->retornaPedidosCamisas($idPedido);
	$totalCamisas = $excel->totalCamisas;

	# Helper
	$infoTabela = array(
		"controle" => array(
			"titulo" => "Controle",
			"campos" => array(
				"id_usuario" => "# do Cliente",
				"id_pedido" => "# do Pedido",
				"nome_usuario" => "Nome do Cliente"
			)
		),
		"customizacoes" => array(
			"titulo" => "Customizações",
			"campos" => array(
				'tecido' => "Tecido",
				'tecido_colarinho_interno' => "Tecido Pé do Colarinho Interno",
				'tecido_colarinho_externo' => "Tecido Colarinho Externo",
				'tecido_punho_interno' => "Tecido Punho Interno",
				'tecido_punho_externo' => "Tecido Punho Externo",
				'modelo' => "Modelo",
				'comprimento_da_manga' => "Comprimento da Manga",
				'modelo_do_colarinho' => "Modelo de Colarinho",
				'rigidez' => "Rigidez",
				'acabamento_do_colarinho' => "Acabamento do Colarinho",
				'bolso' => "Bolso",
				'vista' => "Vista",
				'punho' => "Punho",
				'comprimento_total' => "Comprimento Total",
				'monograma' => "Monograma",
				'local_do_monograma' => "Local do Monograma"
			),
		),
		"medidas" => array(
			"titulo" => "Medidas",
			"campos" => array(
				'colarinho' => "Colarinho",
				'torax' => "Tórax",
				'cintura' => "Cintura",
				'quadril' => "Quadril",
				'braco' => "Braço",
				'punho' => "Punho",
				'costas' => "Costas",
				'ombro' => "Ombro",
				'manga' => "Comprimento Manga",
				'frontal' => "Comprimento Corpo Frente"
				
			),
		)
	);

	# Monta tabela
	echo '
	<table style="border-collapse:collapse; font-size:11px;" border="0">
		<thead>
			<tr><th></th></tr>
			<tr><th style="text-align:left;">Tabela de Controle - Pedidos</th></tr>
		</thead>
	</table>';
	foreach($infoTabela as $areaIndex => $areaPedidos):
		echo '
		<table style="border-collapse:collapse; font-size:11px;" border="0">
			<thead>
				<tr><th></th></tr>
				<tr><th style="text-align:left;">'.$areaPedidos['titulo'].'</th></tr>
				<tr><th></th></tr>
			</thead>
		</table>';
		$o = 0;
		if($o == 0 && $areaIndex == 'medidas'):
			echo '
			<table style="border-collapse:collapse; font-size:11px;" border="0">
				<tbody>';
					foreach($areaPedidos['campos'] as $nomeCampo => $tituloCampo):
						if($o == 0 && $areaIndex == 'medidas'):
							echo '<tr>';
							echo '	<td></td>';
							for($i=1;$i<=$totalCamisas;$i++):
								echo '<td style="text-align:center; font-weight:bold;">Original</td>';
								echo '<td style="text-align:center; font-weight:bold;">Corte</td>';
								echo '<td style="text-align:center; font-weight:bold;">Corte Ajust.</td>';
							endfor;
							echo '</tr>';
							$o = 1;
						endif;
					endforeach;
			echo '
				</tbody>
			</table>';
		endif;
		echo '
		<table style="border-collapse:collapse; border-style:dotted; font-size:11px;" border="1">
			<tbody>';
			# Para cada campo
			foreach($areaPedidos['campos'] as $nomeCampo => $tituloCampo):
				$titulo = true;
				echo '<tr>';
				for($i=1;$i<=$totalCamisas;$i++):
					if($titulo):
						echo '<td style="border-style:dotted;">'.$tituloCampo.'</td>';
						$titulo = false;
					endif;
					if($areaIndex == 'medidas'):
						echo '<td style="border-style:dotted; text-align:center; white-space:nowrap;">'.number_format("0",2,",",".").'</td>';
						echo '<td style="border-style:dotted; text-align:center; white-space:nowrap;">'.number_format("0",2,",",".").'</td>';
						echo '<td style="border-style:dotted; text-align:center; white-space:nowrap;">'.number_format($dadosTabela[$i][$areaIndex][$nomeCampo],2,",",".").'</td>';
					elseif(strpos($nomeCampo,'id_') !== false):
						echo '<td colspan="3" style="border-style:dotted; text-align:center; white-space:nowrap;">#'.str_pad($dadosTabela[$i][$areaIndex][$nomeCampo],5,'0', STR_PAD_LEFT).'</td>';
					else:
						echo '<td colspan="3" style="border-style:dotted; text-align:center; white-space:nowrap;">'.$dadosTabela[$i][$areaIndex][$nomeCampo].'</td>';
					endif;
				endfor;
				echo '</tr>';
			endforeach;
		echo '</tbody>
		</table>';
	endforeach;

	# Padrão das Medidas
	$padroes = array(
		"Colarinho" => array("Ultra Slim" => "3", "Slim Fit" => "3", "Normal" => "3", "Confortável" => "3"),
		"Tórax" => array("Ultra Slim" => "5", "Slim Fit" => "6", "Normal" => "7", "Confortável" => "8"),
		"Cintura" => array("Ultra Slim" => "4", "Slim Fit" => "5", "Normal" => "6", "Confortável" => "7"),
		"Quadril" => array("Ultra Slim" => "4", "Slim Fit" => "5", "Normal" => "6", "Confortável" => "7"),
		"Braço" => array("Ultra Slim" => "3", "Slim Fit" => "4", "Normal" => "5", "Confortável" => "5"),
		"Punho" => array("Ultra Slim" => "3", "Slim Fit" => "3", "Normal" => "3", "Confortável" => "3"),
		"Costas" => array("Ultra Slim" => "0", "Slim Fit" => "0", "Normal" => "0", "Confortável" => "0"),
		"Comprimento da Manga" => array("Ultra Slim" => "0", "Slim Fit" => "0", "Normal" => "0", "Confortável" => "0"),
		"Comprimento do Corpo" => array("Ultra Slim" => "0", "Slim Fit" => "0", "Normal" => "0", "Confortável" => "0"),
		"Comprimento do Corpo - Casual" => array("Ultra Slim" => "-3", "Slim Fit" => "-3", "Normal" => "-3", "Confortável" => "-3"),
		"Comprimento Total" => array("Ultra Slim" => "0.04", "Slim Fit" => "0.04", "Normal" => "0.04", "Confortável" => "0.04"),
	);

	echo '
	<table style="border-collapse:collapse; border:none; font-size:11px;" border="0">
		<thead>
			<tr><th></th></tr>
			<tr><th style="text-align:left;">Medidas</th></tr>
		</thead>
	</table>
	<table style="border-collapse:collapse; border:none; font-size:11px;" border="0">
		<tbody>
			<tr><td></td>';
			foreach($padroes["Colarinho"] as $tituloCategoria => $valorCategoria):
				echo '<td style="font-weight:bold; white-space:nowrap;">'.$tituloCategoria.'</td>';
			endforeach;
			echo '
			</tr>
		</tbody>
	</table>
	<table style="border-collapse:collapse; border-style:dotted; font-size:11px;" border="1">
		<tbody>';
			foreach($padroes as $tituloMedida => $arrayMedida):
				echo '<tr><td style="border-style:dotted;">'.$tituloMedida.'</td>';
				foreach($arrayMedida as $tituloMed => $valorMed):
					echo '<td style="text-align:center; border-style:dotted; white-space:nowrap;">'.number_format($valorMed,2,",",".").'</td>';
				endforeach;
				echo '</tr>';
			endforeach;
			echo '
		</tbody>
	</table>';
?>