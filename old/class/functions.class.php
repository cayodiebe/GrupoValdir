<?php
	class general_functions {		
	    # Segurança
		function _antiSqlInjection($Target){
			$sanitizeRules = array('FROM','SELECT','INSERT','DELETE','WHERE','DROP TABLE','SHOW TABLES');
			foreach($Target as $key => $value):
				if(is_array($value)): $arraSanitized[$key] = _antiSqlInjection($value);
				else:
					$arraSanitized[$key] = (!get_magic_quotes_gpc()) ? addslashes(str_ireplace($sanitizeRules,"",$value)) : str_ireplace($sanitizeRules,"",$value);
				endif;
			endforeach;
			return @$arraSanitized;
		}

		//Pega conteudo do include
		function get_include_contents($filename) {
			if (is_file($filename)) {
				ob_start();
				include $filename;
				$contents = ob_get_contents();
				ob_end_clean();
				return $contents;
			}
			return false;
		}

		//Valida CPF
		function validaCPF($cpf = null) {
		    if(empty($cpf)) {
		        return false;
		    }
		    $cpf = ereg_replace('[^0-9]', '', $cpf);
		    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
		    // Verifica se o numero de digitos informados é igual a 11 
		    if (strlen($cpf) != 11) {
		        return false;
		    }
		    // Verifica se nenhuma das sequências invalidas abaixo 
		    // foi digitada. Caso afirmativo, retorna falso
		    else if ($cpf == '00000000000' || 
		        $cpf == '11111111111' || 
		        $cpf == '22222222222' || 
		        $cpf == '33333333333' || 
		        $cpf == '44444444444' || 
		        $cpf == '55555555555' || 
		        $cpf == '66666666666' || 
		        $cpf == '77777777777' || 
		        $cpf == '88888888888' || 
		        $cpf == '99999999999') {
		        return false;
		     } else {   
		        for ($t = 9; $t < 11; $t++) {
		            for ($d = 0, $c = 0; $c < $t; $c++) {
		                $d += $cpf{$c} * (($t + 1) - $c);
		            }
		            $d = ((10 * $d) % 11) % 10;
		            if ($cpf{$c} != $d) {
		                return false;
		            }
		        }
		        return true;
		    }
		}
		
		//Verifica se o email é válido
		function is_valid_email($email){
		   	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			    return false;
			}else{
				return true;
			}
		}
		
		//Retorna o endereço de IP
		function getIp(){
			if (!empty($_SERVER['HTTP_CLIENT_IP'])){
				$ip=$_SERVER['HTTP_CLIENT_IP'];
			}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
				$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
			}else{
				$ip=$_SERVER['REMOTE_ADDR'];
			}
			return $ip;
		}
		
		//Verifica variável contra SQL Injection
		function verificaInjection( $sCode ) {
			if ( function_exists( "mysql_real_escape_string" ) ) {
				$sCode = mysql_real_escape_string( $sCode );
			} else {
				$sCode = addslashes( $sCode );
			}
			return $sCode;
		}
		
		//Retorna a url atual
		function trazUrlCompleta(){
			$s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
			$protocol = substr(strtolower($_SERVER["SERVER_PROTOCOL"]), 0, strpos(strtolower($_SERVER["SERVER_PROTOCOL"]), "/")) . $s;
			$port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]);
			return $protocol . "://" . $_SERVER['SERVER_NAME'] . $port . $_SERVER['REQUEST_URI'];
		}
		
		//Gera uma string randomica
		function gerarRand($tamanho = ""){	
			$code = md5(uniqid(rand(), true));
			if ($tamanho != "") return substr($code, 0, $tamanho);
			else return $code;
		}

		//URL Amigavel
		function gerarUrl($url){
		    $output = preg_replace("/\s+/" , "_" , trim($url));
		    $output = preg_replace("/\W+/" , "" , $output);
		    $output = preg_replace("/_/" , "-" , $output);
		    return strtolower($output);
		}
		
		function Normaliza($string) {
			$table = array('Š'=>'S','š'=>'s','Đ'=>'Dj','đ'=>'dj','Ž'=>'Z','ž'=>'z','Č'=>'C','č'=>'c','Ć'=>'C','ć'=>'c','À'=>'A','Á'=>'A','Â'=>'A','Ã'=>'A','Ä'=>'A','Å'=>'A','Æ'=>'A','Ç'=>'C','È'=>'E','É'=>'E',
			'Ê'=>'E','Ë'=>'E','Ì'=>'I','Í'=>'I','Î'=>'I','Ï'=>'I','Ñ'=>'N','Ò'=>'O','Ó'=>'O','Ô'=>'O','Õ'=>'O','Ö'=>'O','Ø'=>'O','Ù'=>'U','Ú'=>'U','Û'=>'U','Ü'=>'U','Ý'=>'Y','Þ'=>'B','ß'=>'Ss',
			'à'=>'a','á'=>'a','â'=>'a','ã'=>'a','ä'=>'a','å'=>'a','æ'=>'a','ç'=>'c','è'=>'e','é'=>'e','ê'=>'e','ë'=>'e','ì'=>'i','í'=>'i','î'=>'i','ï'=>'i','ð'=>'o','ñ'=>'n','ò'=>'o','ó'=>'o',
			'ô'=>'o','õ'=>'o','ö'=>'o','ø'=>'o','ù'=>'u','ú'=>'u','û'=>'u','ý'=>'y','ý'=>'y','þ'=>'b','ÿ'=>'y','Ŕ'=>'R','ŕ'=>'r');
			return strtr($string, $table);
		}

		function formataURL($s,$n=5) {
			$r = array(',','"',"'",';','.',':','?','!','&');
			$s = $this->normaliza($s);
			$s = str_replace('/','-',$s);
			$s = str_replace($r,'',$s);
			$a = explode(' ',$s);
			$a = array_slice($a,0,$n);
			return strtolower(implode('-',$a));
		}
		
		function removerTags($string){
			$val = trim($string);
			$val = strip_tags($val);
			//$val = htmlentities($val, ENT_QUOTES, 'UTF-8'); // convert funky chars to html entities
			$pat = array("\r\n", "\n\r", "\n", "\r"); // remove returns
			$val = str_replace($pat, '', $val);
			$pat = array('/^\s+/', '/\s{2,}/', '/\s+\$/'); // remove multiple whitespaces
			$rep = array('', ' ', '');
			$val = preg_replace($pat, $rep, $val);
			$val = trim($val);
			# $val = mysql_real_escape_string($val);	
			return $val;
		}

		function limitaTexto($texto,$tamMax = 30) {
			if(strlen($texto) > $tamMax) 
			   echo substr($texto, 0, $tamMax) . '...';
			else
			   echo $texto;
		}

		function limitaTextoR($texto,$tamMax = 30) {
			if(strlen($texto) > $tamMax) 
			   return substr($texto, 0, $tamMax) . '...';
			else
			   return $texto;
		}

		function gerarSql($var){
			$values = "";
			//Pega a quantidade de variáves em POST
			$tam = count($var);
			$i = 1;
			//Pega cada value e adiciona na string
			foreach($var as $dado):
			    $values .= ' \' 	'.$dado.' \' ';
				if($i < $tam)
					$values .= ",";
				$i++;
			endforeach;
			return $values;
		}
		//Função que croptografa e decriptografa os dados através do método AES
		function aes($imputText,$acao,$imputKey = "__MINHA__CHAVE__"){
			
			# criptografia
    		require_once("class/aes.php");
    		//A chave deve conter 16, 24 ou 32 caracteres
			$blockSize = 256;
			$aes = new AES($imputText, $imputKey, $blockSize);

			if($acao == 'encode'):
				$enc = $aes->encrypt();
				return  $enc;
			endif;

			if($acao == 'decode'):
				$aes->setData($imputText);
				$dec=$aes->decrypt();
				return $dec;
			endif;
		}
		function converterData($data){
			if($data <> ''){
				$dataC = explode("/",$data);
				return $dataC[2].'-'.$dataC[1].'-'.$dataC[0];
			}else{
				return '';
			}
		}

		function desconverteData($data){
			if($data <> ''){
				$dataC = explode("-",$data);
				return $dataC[2].'/'.$dataC[1].'/'.$dataC[0];
			}else{
				return '';
			}
		}
		function strip_special_chars($string){ 
		  $string = preg_replace('/([^.a-z0-9]+)/i', '_', $string);
		  return $string;  
		}
		function compararString($string1,$string2){
			if($string1 == $string2)
				return true;
			else
				return false;
		}
		function getPageActive($get,$atual){
			if( isset($get[0]) && $get[0] == $atual )
				echo 'class="ativo"';
		}
	}
?>

