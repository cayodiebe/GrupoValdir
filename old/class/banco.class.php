<?php
	// This class contains all the consultations held bank
	class Consultas {

		protected $db;
		
		function __construct($conexao) {
	       $this->db = $conexao;
	    }

		function getExemplo(){
			$sql = $this->db->prepare("SELECT * FROM home");
			$sql->execute();            
			$dados = $sql->fetchAll();

			return $dados;
		}
		function getStatusProjetoNoticias(){
			$sql = $this->db->prepare("SELECT * FROM status_projeto_noticias WHERE id_user = '".$_SESSION['id']."' ");
			$sql->execute();            
			$dados = $sql->fetchAll();

			return $dados;
		}
		function getStatusProjetoImagens(){
			$sql = $this->db->prepare("SELECT * FROM status_projetos_imagens WHERE id_user = '".$_SESSION['id']."' ");
			$sql->execute();            
			$dados = $sql->fetchAll();

			return $dados;
		}
		function getStatusProjeto(){
			$sql = $this->db->prepare("SELECT * FROM status_projeto WHERE id = '".$_SESSION['id']."' ");
			$sql->execute();            
			$dados = $sql->fetch();

			return $dados;
		}
		function getSobreBanners(){
			$sql = $this->db->prepare("SELECT * FROM sobre_banners");
			$sql->execute();            
			$dados = $sql->fetchAll();

			return $dados;
		}
		function getSobre(){
			$sql = $this->db->prepare("SELECT * FROM sobre");
			$sql->execute();            
			$dados = $sql->fetch();

			return $dados;
		}
		function getContatoRodape(){
			$sql = $this->db->prepare("SELECT * FROM contato_rodape");
			$sql->execute();            
			$dados = $sql->fetch();

			return $dados;
		}
		function getServicosEquipeItens(){
			$sql = $this->db->prepare("SELECT * FROM servicos_equipe_itens");
			$sql->execute();            
			$dados = $sql->fetchAll();

			return $dados;
		}
		function getServicosEquipe(){
			$sql = $this->db->prepare("SELECT * FROM servicos_equipe");
			$sql->execute();            
			$dados = $sql->fetch();

			return $dados;
		}
		function getProjetos(){
			$sql = $this->db->prepare("SELECT * FROM projetos");
			$sql->execute();            
			$dados = $sql->fetch();

			return $dados;
		}
		function getProjetosEdificios(){
			$sql = $this->db->prepare("SELECT * FROM projetos_edificios");
			$sql->execute();            
			$dados = $sql->fetchAll();

			return $dados;
		}
		function getProjetosEmpresarial(){
			$sql = $this->db->prepare("SELECT * FROM projetos_empresarial");
			$sql->execute();            
			$dados = $sql->fetchAll();

			return $dados;
		}
		function getProjetosResidencial(){
			$sql = $this->db->prepare("SELECT * FROM projetos_residencial");
			$sql->execute();            
			$dados = $sql->fetchAll();

			return $dados;
		}
		function getParceiros(){
			$sql = $this->db->prepare("SELECT * FROM parceiros");
			$sql->execute();            
			$dados = $sql->fetchAll();

			return $dados;
		}
		function getPorqueEscolher(){
			$sql = $this->db->prepare("SELECT * FROM porque_escolher");
			$sql->execute();            
			$dados = $sql->fetch();

			return $dados;
		}
		function getProjetosItensHome(){
			$sql = $this->db->prepare("SELECT * FROM projetos_itens_home");
			$sql->execute();            
			$dados = $sql->fetchAll();

			return $dados;
		}
		function getProjetosHome(){
			$sql = $this->db->prepare("SELECT * FROM projetos_home");
			$sql->execute();            
			$dados = $sql->fetch();

			return $dados;
		}
		function getServicosItens(){
			$sql = $this->db->prepare("SELECT * FROM servicos_itens");
			$sql->execute();            
			$dados = $sql->fetchAll();

			return $dados;
		}
		function getServicos(){
			$sql = $this->db->prepare("SELECT * FROM servicos");
			$sql->execute();            
			$dados = $sql->fetch();

			return $dados;
		}
		function getSobreHome(){
			$sql = $this->db->prepare("SELECT * FROM sobre_home");
			$sql->execute();            
			$dados = $sql->fetch();

			return $dados;
		}
		function getContato(){
			$sql = $this->db->prepare("SELECT * FROM contato");
			$sql->execute();            
			$dados = $sql->fetch();

			return $dados;
		}
		function getRedesSociais(){
			$sql = $this->db->prepare("SELECT * FROM redes_sociais");
			$sql->execute();            
			$dados = $sql->fetch();

			return $dados;
		}
		function getBanners(){
			$sql = $this->db->prepare("SELECT * FROM banner_home");
			$sql->execute();            
			$dados = $sql->fetchAll();

			return $dados;
		}
		function setExemplo(){
			$sql = $this->db->prepare("INSERT INTO `home` (`campo1`, `campo2`) VALUES ( 'valor1' , 'valor2' )");
			$sql->execute();            
		}
		function updateExemplo(){
			$sql = $this->db->prepare("UPDATE `home` SET `campo1`= 'valor1',`campo2`= 'valor2' WHERE 1");
			$sql->execute();            
		}
		function deleteExemplo(){
			$sql = $this->db->prepare("DELETE FROM `home` WHERE 1");
			$sql->execute();            
		}
		function getSeo(){
			$sql = $this->db->prepare("SELECT * FROM seo");
			$sql->execute();            
			$dados = $sql->fetch();

			return $dados;
		}
		function getLoginNormal($login,$senha){
			$sql = $this->db->prepare("SELECT * FROM status_projeto WHERE login = '".$login."' AND senha = '".$senha."' ");
			$sql->execute();            
			$dados = $sql->fetch();
			
			return $dados;
		}
		function getLoginDecode($login,$senha){
			require_once("functions.class.php");
			$functions = new general_functions();
			$sql = $this->db->prepare("SELECT * FROM user WHERE login = '".$login."' AND senha = '".$functions->aes($senha,'encode')."' ");
			$sql->execute();            
			$dados = $sql->fetch();
			
			return $dados;
		}

	}
?>

