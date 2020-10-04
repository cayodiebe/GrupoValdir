<?php 
	class Excel {
		public $totalCamisas = 0;

		# Retorna Array com os IDs das camisas criadas
		public function retornaCamisasID($idPedido) {
			# Busca pedido no banco
			$sql = mysql_query("SELECT * FROM user_pedidos WHERE id = '$idPedido'");
			$num = mysql_affected_rows();
			if($num > 0):
				$row = mysql_fetch_array($sql);
				$idCamisas = explode(",",$row['id_criar']);
				return array_filter($idCamisas);
			else:
				return false;
			endif;
		}

		# Traz dados da criação da camisa
		public function retornaCamisa($idCamisa) {
			# Busca no banco
			$sql = mysql_query("SELECT * FROM user_criar WHERE id = '$idCamisa'");
			$row = mysql_fetch_array($sql);
			return $row;
		}

		# Traz dados do usuário
		public function retornaUsuario($idUsuario) {
			# Busca no banco
			$sql = mysql_query("SELECT * FROM user_info WHERE id = '$idUsuario'");
			$row = mysql_fetch_array($sql);
			return $row;
		}

		# HELPER - Busca valor pelo ID
		public function helperDados($valor,$retorna,$tabela) {
			$sql = mysql_query("SELECT * FROM ".$tabela." WHERE id = '".$valor."'");
			$row = mysql_fetch_array($sql);
			return $row[$retorna];
		}

		# Traz todos os pedidos e suas camisas
		public function retornaPedidosCamisas($idPedido = false) {
			# Busca pedidos
			if($idPedido):
				$sqlP = mysql_query("SELECT * FROM user_pedidos WHERE id = '$idPedido' ORDER BY id ASC");
			else:
				$sqlP = mysql_query("SELECT * FROM user_pedidos ORDER BY id ASC");
			endif;
			$numP = mysql_affected_rows();
			if($numP > 0):
				$i = 0;
				while($rowP = mysql_fetch_array($sqlP)):
					# Para cada pedido
					$idPedido = $rowP['id'];
					$dadosPedido = $rowP;
					$idCamisas = $this->retornaCamisasID($idPedido);
					# Busca cliente
					$dadosUsuario = $this->retornaUsuario($rowP['id_user']);
					# Para cada camisa
					foreach($idCamisas as $idCamisa):
						$i++;
						$dadosCamisa = $this->retornaCamisa($idCamisa);
						# Junta ao array completo
						$arrayPedidos[$i]['controle'] = array(
							'id_usuario' => $rowP['id_user'],
							'id_pedido' => $rowP['id'],
							'nome_usuario' => $dadosUsuario['nome_completo']
						);
						$arrayPedidos[$i]['customizacoes'] = array(
							'tecido' => $this->helperDados($dadosCamisa['id_tecido'],'titulo','tecidos'),
							'tecido_colarinho_interno' => $this->helperDados($dadosCamisa['id_colarinho_interno'],'titulo','tecidos'),
							'tecido_colarinho_externo' => $this->helperDados($dadosCamisa['id_colarinho_externo'],'titulo','tecidos'),
							'tecido_punho_interno' => $this->helperDados($dadosCamisa['id_punho_interno'],'titulo','tecidos'),
							'tecido_punho_externo' => $this->helperDados($dadosCamisa['id_punho_externo'],'titulo','tecidos'),
							'modelo' => $dadosCamisa['modelo'],
							'comprimento_da_manga' => $dadosCamisa['comprimento_da_manga'],
							'modelo_do_colarinho' => $dadosCamisa['colarinho'],
							'rigidez' => $dadosCamisa['rigidez_do_colarinho_e_punho'],
							'acabamento_do_colarinho' => $dadosCamisa['acabamento_do_colarinho_e_punho'],
							'bolso' => $dadosCamisa['bolso'],
							'vista' => $dadosCamisa['vista'],
							'punho' => $dadosCamisa['punho'],
							'comprimento_total' => $dadosCamisa['comprimento'],
							'monograma' => $dadosCamisa['iniciais'],
							'local_do_monograma' => $dadosCamisa['posicao']
						);
						$arrayPedidos[$i]['medidas'] = array(
							'colarinho' => $rowP['me_colarinho'],
							'torax' => $rowP['me_torax'],
							'cintura' => $rowP['me_cintura'],
							'quadril' => $rowP['me_quadril'],
							'braco' => $rowP['me_braco'],
							'punho' => $rowP['me_punho'],
							'costas' => $rowP['me_costas'],
							'ombro' => $rowP['me_ombro'],
							'manga' => $rowP['me_manga'],
							'frontal' => $rowP['me_frontal'],
							#'traseiro' => $rowP['me_traseiro']
						);
					endforeach;
				endwhile;
				$this->totalCamisas = $i;
				return $arrayPedidos;
			else:
				echo 'Nenhum registro encontrado.';
			endif;
		}

		# Traz todos os pedidos e suas camisas
		public function retornaStatusCamisas($idPedido = false) {
			# Busca pedidos
			if($idPedido):
				$sqlP = mysql_query("SELECT * FROM user_pedidos WHERE id = '$idPedido' ORDER BY id ASC");
			else:
				$sqlP = mysql_query("SELECT * FROM user_pedidos ORDER BY id ASC");
			endif;
			$numP = mysql_affected_rows();
			if($numP > 0):
				$i = 0;
				while($rowP = mysql_fetch_array($sqlP)):
					# Para cada pedido
					$idPedido = $rowP['id'];
					$dadosPedido = $rowP;
					$idCamisas = $this->retornaCamisasID($idPedido);
					# Busca cliente
					$dadosUsuario = $this->retornaUsuario($rowP['id_user']);
					# Para cada camisa
					foreach($idCamisas as $idCamisa):
						$i++;
						$dadosCamisa = $this->retornaCamisa($idCamisa);
						# Junta ao array completo
						$arrayPedidos[$i]['compra'] = array(
							'id_usuario' => $rowP['id_user'],
							'id_pedido' => $rowP['id'],
							'nome_usuario' => $dadosUsuario['nome_completo'],
							"data_pedido" => date("d/m/Y",strtotime($rowP['data'])),
							"status_pedido" => $rowP['status']
						);
						$arrayPedidos[$i]['medidas'] = array(
							'colarinho' => $rowP['me_colarinho'],
							'torax' => $rowP['me_torax'],
							'cintura' => $rowP['me_cintura'],
							'quadril' => $rowP['me_quadril'],
							'braco' => $rowP['me_braco'],
							'punho' => $rowP['me_punho'],
							'costas' => $rowP['me_costas'],
							'ombro' => $rowP['me_ombro'],
							'manga' => $rowP['me_manga'],
							'frontal' => $rowP['me_frontal'],
							#'traseiro' => $rowP['me_traseiro']
						);
						$arrayPedidos[$i]['customizacoes'] = array(
							'tecido' => $this->helperDados($dadosCamisa['id_tecido'],'titulo','tecidos'),
							'modelo' => $dadosCamisa['modelo'],
							'comprimento_da_manga' => $dadosCamisa['comprimento_da_manga'],
							'modelo_do_colarinho' => $dadosCamisa['colarinho'],
							'rigidez' => $dadosCamisa['rigidez_do_colarinho_e_punho'],
							'acabamento_do_colarinho' => $dadosCamisa['acabamento_do_colarinho_e_punho'],
							'bolso' => $dadosCamisa['bolso'],
							'vista' => $dadosCamisa['vista'],
							'punho' => $dadosCamisa['punho'],
							'comprimento_total' => $dadosCamisa['comprimento'],
							'monograma' => $dadosCamisa['iniciais'],
							'local_do_monograma' => $dadosCamisa['posicao']
						);
					endforeach;
				endwhile;
				$this->totalCamisas = $i;
				return $arrayPedidos;
			else:
				echo 'Nenhum registro encontrado.';
			endif;
		}
	}
?>