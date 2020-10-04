<?php 

	class Geolocalizacao{
		
		private $ip;
		private $url;
		private $pais;
		private $cidade;
		private $estado;

		function __construct() {
	       $this->ip = $_SERVER['REMOTE_ADDR'];
	       $this->url = "http://www.localizaip.com.br/localizar-ip.php?ip=".$this->ip;
	    }
		function geoPais(){
			$pagina = file_get_contents($this->url);
			preg_match_all("/s:<b>(.*)<\/b>/U",$pagina,$array);
			$pais = explode(":",strip_tags($array[0][0]));
			$this->pais = $pais[1];
		}
		function geoEstado(){
			$pagina = file_get_contents($this->url);
			preg_match_all("/Estado:<b>(.*)<\/b>/U",$pagina,$array);
			$estado = explode("Estado:",strip_tags($array[0][0]));
			$this->estado = $estado[1];
		}
		function geoCidade(){
			$pagina = file_get_contents($this->url);
			preg_match_all("/Cidade:<b>(.*)<\/b>/U",$pagina,$array);
			$cidade = explode("Cidade:",strip_tags($array[0][0]));
			$this->cidade = $cidade[1];
		}
		function getPais(){
			$this->geoPais();
			return $this->pais;
		}
		function getEstado(){
			$this->geoEstado();
			return $this->estado;
		}
		function getCidade(){
			$this->geoCidade();
			return $this->cidade;
		}

	}
	//Cria um objeto de Geolocalização
	//$geolozalizacao = new Geolocalizacao();

	//Retorna o Pais
	//$geolozalizacao->getPais();
	//Retorna o Estado
	//$geolozalizacao->getEstado();
	//Retorna a Cidade
	//$geolozalizacao->getCidade();
?>