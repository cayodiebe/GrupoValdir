<?php 
	# GET
	if(isset($_GET['id']) && $_GET['id'] <> ''):
		$idPedido = $_GET['id'];
		$nomeArquivo = "Status_dos_Pedidos--Pedido_".$idPedido."--".date("d-m-Y").".xls";
	else:
		$idPedido = false;
		$nomeArquivo = "Status_dos_Pedidos--".date("d-m-Y").".xls";
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
	$dadosTabela = $excel->retornaStatusCamisas($idPedido);
	$totalCamisas = $excel->totalCamisas;

	# Helper
	$infoTabela = array(
		"compra" => array(
			"titulo" => "Compra",
			"campos" => array(
				"id_usuario" => "# do Cliente",
				"id_pedido" => "# do Pedido",
				"nome_usuario" => "Nome do Cliente",
				"data_pedido" => "Data do Pedido",
				"status_pedido" => "Status do Pedido"
			)
		),
		"medidas" => array(
			"titulo" => "Medidas",
			"campos" => array(
				"colarinho" => "Colarinho",
				"torax" => "Tórax",
				"cintura" => "Cintura",
				"quadril" => "Quadril",
				"braco" => "Braço",
				"punho" => "Punho",
				"costas" => "Costas",
				"ombro" => "Ombro",
				"manga" => "Comprimento da Manga",
				"frontal" => "Comprimento Corpo Frente"
				
			)
		),
		"customizacoes" => array(
			"titulo" => "Customizações",
			"campos" => array(
				'tecido' => "Tecido",
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
			)
		),
		"modelagem" => array(
			"titulo" => "Modelagem e Corte",
			"vazio" => true,
			"campos" => array(
				'modelista' => 'Modelista',
				'data_entrega' => 'Data de Entrega',
				'conclusao' => 'Conclusão',
				'data_retirada' => 'Data de Retirada'
			)
		),
		"costura" => array(
			"titulo" => "Costura",
			"vazio" => true,
			"campos" => array(
				'costureira' => 'Costureira',
				'data_entrega' => 'Data de Entrega',
				'conclusao' => 'Conclusão',
				'data_retirada' => 'Data de Retirada'
			)
		),
		"acabamento" => array(
			"titulo" => "Acabamento",
			"vazio" => true,
			"campos" => array(
				'responsavel' => 'Responsável',
				'data_entrega' => 'Data de Entrega',
				'conclusao' => 'Conclusão',
				'data_retirada' => 'Data de Retirada'
			)
		),
		"entrega" => array(
			"titulo" => "Entrega",
			"vazio" => true,
			"campos" => array(
				'transportadora' => 'Transportadora',
				'data_entrega' => 'Data de Entrega',
				'data_recebimento' => 'Data de Recebimento'
			)
		)
	);

	# Nome da Tabela
	echo '<table style="border-collapse:collapse; font-size:11px;"><thead><tr><th></th></tr><tr><th colspan="30" style="text-align:left;">Tabela de Controle - Status dos Pedidos</th></tr></thead></table>';

	# Categorias
	echo '<table style="border-collapse:collapse; font-size:11px;">';
	echo '	<tr><th></th></tr>';
	echo '	<tr>';
	foreach($infoTabela as $indexTabela => $categoriaTabela):
		echo '<td style="width:10px"></td>';
		echo '<td colspan="'.count($categoriaTabela['campos']).'" style="font-weight:bold; text-align:center; border-bottom:1px solid #000;">'.$categoriaTabela['titulo'].'</td>';
	endforeach;
	echo '	</tr>';

	# Titulos
	echo '<tr>';
	foreach($infoTabela as $indexTabela => $categoriaTabela):
		echo '<td style="width:10px"></td>';
		if(is_array($categoriaTabela['campos'])):
			foreach($categoriaTabela['campos'] as $indexCampo => $valorCampo):
				echo '<td style="font-weight:bold; border-bottom:1px solid #000; white-space:nowrap;">'.$valorCampo.'</td>';
			endforeach;
		endif;
	endforeach;
	echo '</tr>';

	# Valores
	foreach($dadosTabela as $indexPedido => $dadosPedido):
		echo '<tr>';
		foreach($infoTabela as $indexTabela => $categoriaTabela):
			echo '<td style="width:10px"></td>';
			foreach($categoriaTabela['campos'] as $indexCampo => $valorCampo):
				if(isset($categoriaTabela['vazio'])):
					$valor = "";
				else:
					$valor = $dadosPedido[$indexTabela][$indexCampo];
				endif;
				echo '<td style="white-space:nowrap; text-align:center; border-bottom:1px dotted #000;">'.$valor.'</td>';
			endforeach;
		endforeach;
		echo '</tr>';
	endforeach;

	echo '</table>';

?>