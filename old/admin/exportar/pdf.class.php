<?php 
	class PDF {
		# Formata textos
		public function respostaTexto($valor,$sublinhado = true) {
			if($valor == ''):
				if($sublinhado):
					return '__________________';
				else:
					return '';
				endif;
			else:
				if($sublinhado):
					return '<span class="resp">'.$valor.'</span>';
				else:
					return '<span class="respT">'.$valor.'</span>';
				endif;
			endif;
		}

		# Formata medidas
		public function respostaMedidas($valor) {
			return number_format($valor,1,",",".").' cm';
		}

		# Formata data
		public function respostaData($valor) {
			if($valor == ''):
				return '_____/______/_______';
			else:
				$valor = date("d/m/Y",strtotime($valor));
				return '<span class="resp">'.$valor.'</span>';
			endif;
		}

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
	}
?>