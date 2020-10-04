<?php 	

	class Banner_home{
	    private $id;
	    private $imagem;
	    private $titulo;
	    private $texto;
	    private $link;
	    
	    function __construct($dado=null) {
	         if($dado != null):
	            $this->id = $dado['id'];
	            $this->imagem = $dado['imagem'];
	            $this->titulo = $dado['titulo'];
	            $this->texto = $dado['texto'];
	            $this->link = $dado['link'];
	         endif;
	    }
	    function setid($string){
	        $this->id = $string;
	    }
	    function getid(){
	        return $this->id;
	    }
	    function setimagem($string){
	        $this->imagem = $string;
	    }
	    function getimagem(){
	        return $this->imagem;
	    }
	    function settitulo($string){
	        $this->titulo = $string;
	    }
	    function gettitulo(){
	        return $this->titulo;
	    }
	    function settexto($string){
	        $this->texto = $string;
	    }
	    function gettexto(){
	        return $this->texto;
	    }
	    function setlink($string){
	        $this->link = $string;
	    }
	    function getlink(){
	        return $this->link;
	    }
	}

	class Contato{
	    private $id;
	    private $titulo;
	    private $endereco;
	    private $mapa;
	    private $email_destino;
	    
	    function __construct($dado=null) {
	         if($dado != null):
	            $this->id = $dado['id'];
	            $this->titulo = $dado['titulo'];
	            $this->endereco = $dado['endereco'];
	            $this->mapa = $dado['mapa'];
	            $this->email_destino = $dado['email_destino'];
	         endif;
	    }
	    function setid($string){
	        $this->id = $string;
	    }
	    function getid(){
	        return $this->id;
	    }
	    function settitulo($string){
	        $this->titulo = $string;
	    }
	    function gettitulo(){
	        return $this->titulo;
	    }
	    function setendereco($string){
	        $this->endereco = $string;
	    }
	    function getendereco(){
	        return $this->endereco;
	    }
	    function setmapa($string){
	        $this->mapa = $string;
	    }
	    function getmapa(){
	        return $this->mapa;
	    }
	    function setemail_destino($string){
	        $this->email_destino = $string;
	    }
	    function getemail_destino(){
	        return $this->email_destino;
	    }
	}

	class Contato_rodape{
	    private $id;
	    private $endereco;
	    private $telefone;
	    
	    function __construct($dado=null) {
	         if($dado != null):
	            $this->id = $dado['id'];
	            $this->endereco = $dado['endereco'];
	            $this->telefone = $dado['telefone'];
	         endif;
	    }
	    function setid($string){
	        $this->id = $string;
	    }
	    function getid(){
	        return $this->id;
	    }
	    function setendereco($string){
	        $this->endereco = $string;
	    }
	    function getendereco(){
	        return $this->endereco;
	    }
	    function settelefone($string){
	        $this->telefone = $string;
	    }
	    function gettelefone(){
	        return $this->telefone;
	    }
	}

	class Parceiros{
	    private $id;
	    private $imagem;
	    private $nome;
	    private $link;
	    
	    function __construct($dado=null) {
	         if($dado != null):
	            $this->id = $dado['id'];
	            $this->imagem = $dado['imagem'];
	            $this->nome = $dado['nome'];
	            $this->link = $dado['link'];
	         endif;
	    }
	    function setid($string){
	        $this->id = $string;
	    }
	    function getid(){
	        return $this->id;
	    }
	    function setimagem($string){
	        $this->imagem = $string;
	    }
	    function getimagem(){
	        return $this->imagem;
	    }
	    function setnome($string){
	        $this->nome = $string;
	    }
	    function getnome(){
	        return $this->nome;
	    }
	    function setlink($string){
	        $this->link = $string;
	    }
	    function getlink(){
	        return $this->link;
	    }
	}

	class Porque_escolher{
	    private $id;
	    private $titulo;
	    private $item1;
	    private $item2;
	    private $item3;
	    
	    function __construct($dado=null) {
	         if($dado != null):
	            $this->id = $dado['id'];
	            $this->titulo = $dado['titulo'];
	            $this->item1 = $dado['item1'];
	            $this->item2 = $dado['item2'];
	            $this->item3 = $dado['item3'];
	         endif;
	    }
	    function setid($string){
	        $this->id = $string;
	    }
	    function getid(){
	        return $this->id;
	    }
	    function settitulo($string){
	        $this->titulo = $string;
	    }
	    function gettitulo(){
	        return $this->titulo;
	    }
	    function setitem1($string){
	        $this->item1 = $string;
	    }
	    function getitem1(){
	        return $this->item1;
	    }
	    function setitem2($string){
	        $this->item2 = $string;
	    }
	    function getitem2(){
	        return $this->item2;
	    }
	    function setitem3($string){
	        $this->item3 = $string;
	    }
	    function getitem3(){
	        return $this->item3;
	    }
	}

	class Projetos{
	    private $id;
	    private $titulo;
	    private $texto;
	    
	    function __construct($dado=null) {
	         if($dado != null):
	            $this->id = $dado['id'];
	            $this->titulo = $dado['titulo'];
	            $this->texto = $dado['texto'];
	         endif;
	    }
	    function setid($string){
	        $this->id = $string;
	    }
	    function getid(){
	        return $this->id;
	    }
	    function settitulo($string){
	        $this->titulo = $string;
	    }
	    function gettitulo(){
	        return $this->titulo;
	    }
	    function settexto($string){
	        $this->texto = $string;
	    }
	    function gettexto(){
	        return $this->texto;
	    }
	}

	class Projetos_edificios{
	    private $id;
	    private $imagem;
	    private $descricao;
	    private $cliente;
	    
	    function __construct($dado=null) {
	         if($dado != null):
	            $this->id = $dado['id'];
	            $this->imagem = $dado['imagem'];
	            $this->descricao = $dado['descricao'];
	            $this->cliente = $dado['cliente'];
	         endif;
	    }
	    function setid($string){
	        $this->id = $string;
	    }
	    function getid(){
	        return $this->id;
	    }
	    function setimagem($string){
	        $this->imagem = $string;
	    }
	    function getimagem(){
	        return $this->imagem;
	    }
	    function setdescricao($string){
	        $this->descricao = $string;
	    }
	    function getdescricao(){
	        return $this->descricao;
	    }
	    function setcliente($string){
	        $this->cliente = $string;
	    }
	    function getcliente(){
	        return $this->cliente;
	    }
	}

	class Projetos_empresarial{
	    private $id;
	    private $imagem;
	    private $descricao;
	    private $cliente;
	    
	    function __construct($dado=null) {
	         if($dado != null):
	            $this->id = $dado['id'];
	            $this->imagem = $dado['imagem'];
	            $this->descricao = $dado['descricao'];
	            $this->cliente = $dado['cliente'];
	         endif;
	    }
	    function setid($string){
	        $this->id = $string;
	    }
	    function getid(){
	        return $this->id;
	    }
	    function setimagem($string){
	        $this->imagem = $string;
	    }
	    function getimagem(){
	        return $this->imagem;
	    }
	    function setdescricao($string){
	        $this->descricao = $string;
	    }
	    function getdescricao(){
	        return $this->descricao;
	    }
	    function setcliente($string){
	        $this->cliente = $string;
	    }
	    function getcliente(){
	        return $this->cliente;
	    }
	}

	class Projetos_home{
	    private $id;
	    private $titulo;
	    private $texto;
	    private $imagem_lateral;
	    
	    function __construct($dado=null) {
	         if($dado != null):
	            $this->id = $dado['id'];
	            $this->titulo = $dado['titulo'];
	            $this->texto = $dado['texto'];
	            $this->imagem_lateral = $dado['imagem_lateral'];
	         endif;
	    }
	    function setid($string){
	        $this->id = $string;
	    }
	    function getid(){
	        return $this->id;
	    }
	    function settitulo($string){
	        $this->titulo = $string;
	    }
	    function gettitulo(){
	        return $this->titulo;
	    }
	    function settexto($string){
	        $this->texto = $string;
	    }
	    function gettexto(){
	        return $this->texto;
	    }
	    function setimagem_lateral($string){
	        $this->imagem_lateral = $string;
	    }
	    function getimagem_lateral(){
	        return $this->imagem_lateral;
	    }
	}

	class Projetos_itens_home{
	    private $id;
	    private $imagem;
	    private $descricao;
	    
	    function __construct($dado=null) {
	         if($dado != null):
	            $this->id = $dado['id'];
	            $this->imagem = $dado['imagem'];
	            $this->descricao = $dado['descricao'];
	         endif;
	    }
	    function setid($string){
	        $this->id = $string;
	    }
	    function getid(){
	        return $this->id;
	    }
	    function setimagem($string){
	        $this->imagem = $string;
	    }
	    function getimagem(){
	        return $this->imagem;
	    }
	    function setdescricao($string){
	        $this->descricao = $string;
	    }
	    function getdescricao(){
	        return $this->descricao;
	    }
	}

	class Projetos_residencial{
	    private $id;
	    private $imagem;
	    private $descricao;
	    private $cliente;
	    
	    function __construct($dado=null) {
	         if($dado != null):
	            $this->id = $dado['id'];
	            $this->imagem = $dado['imagem'];
	            $this->descricao = $dado['descricao'];
	            $this->cliente = $dado['cliente'];
	         endif;
	    }
	    function setid($string){
	        $this->id = $string;
	    }
	    function getid(){
	        return $this->id;
	    }
	    function setimagem($string){
	        $this->imagem = $string;
	    }
	    function getimagem(){
	        return $this->imagem;
	    }
	    function setdescricao($string){
	        $this->descricao = $string;
	    }
	    function getdescricao(){
	        return $this->descricao;
	    }
	    function setcliente($string){
	        $this->cliente = $string;
	    }
	    function getcliente(){
	        return $this->cliente;
	    }
	}

	class Redes_sociais{
	    private $id;
	    private $facebook;
	    private $facebook_titulo;
	    private $instagran;
	    private $instagran_titulo;
	    private $google_mais;
	    private $google_mais_titulo;
	    
	    function __construct($dado=null) {
	         if($dado != null):
	            $this->id = $dado['id'];
	            $this->facebook = $dado['facebook'];
	            $this->facebook_titulo = $dado['facebook_titulo'];
	            $this->instagran = $dado['instagran'];
	            $this->instagran_titulo = $dado['instagran_titulo'];
	            $this->google_mais = $dado['google_mais'];
	            $this->google_mais_titulo = $dado['google_mais_titulo'];
	         endif;
	    }
	    function setid($string){
	        $this->id = $string;
	    }
	    function getid(){
	        return $this->id;
	    }
	    function setfacebook($string){
	        $this->facebook = $string;
	    }
	    function getfacebook(){
	        return $this->facebook;
	    }
	    function setfacebook_titulo($string){
	        $this->facebook_titulo = $string;
	    }
	    function getfacebook_titulo(){
	        return $this->facebook_titulo;
	    }
	    function setinstagran($string){
	        $this->instagran = $string;
	    }
	    function getinstagran(){
	        return $this->instagran;
	    }
	    function setinstagran_titulo($string){
	        $this->instagran_titulo = $string;
	    }
	    function getinstagran_titulo(){
	        return $this->instagran_titulo;
	    }
	    function setgoogle_mais($string){
	        $this->google_mais = $string;
	    }
	    function getgoogle_mais(){
	        return $this->google_mais;
	    }
	    function setgoogle_mais_titulo($string){
	        $this->google_mais_titulo = $string;
	    }
	    function getgoogle_mais_titulo(){
	        return $this->google_mais_titulo;
	    }
	}

	class Seo{
	    private $id;
	    private $keywords;
	    private $titulo_site;
	    private $descricao_site;
	    private $imagem_facebook;
	    private $favicon;
	    
	    function __construct($dado=null) {
	         if($dado != null):
	            $this->id = $dado['id'];
	            $this->keywords = $dado['keywords'];
	            $this->titulo_site = $dado['titulo_site'];
	            $this->descricao_site = $dado['descricao_site'];
	            $this->imagem_facebook = $dado['imagem_facebook'];
	            $this->favicon = $dado['favicon'];
	         endif;
	    }
	    function setid($string){
	        $this->id = $string;
	    }
	    function getid(){
	        return $this->id;
	    }
	    function setkeywords($string){
	        $this->keywords = $string;
	    }
	    function getkeywords(){
	        return $this->keywords;
	    }
	    function settitulo_site($string){
	        $this->titulo_site = $string;
	    }
	    function gettitulo_site(){
	        return $this->titulo_site;
	    }
	    function setdescricao_site($string){
	        $this->descricao_site = $string;
	    }
	    function getdescricao_site(){
	        return $this->descricao_site;
	    }
	    function setimagem_facebook($string){
	        $this->imagem_facebook = $string;
	    }
	    function getimagem_facebook(){
	        return $this->imagem_facebook;
	    }
	    function setfavicon($string){
	        $this->favicon = $string;
	    }
	    function getfavicon(){
	        return $this->favicon;
	    }
	}

	class Servicos{
	    private $id;
	    private $titulo;
	    private $texto;
	    
	    function __construct($dado=null) {
	         if($dado != null):
	            $this->id = $dado['id'];
	            $this->titulo = $dado['titulo'];
	            $this->texto = $dado['texto'];
	         endif;
	    }
	    function setid($string){
	        $this->id = $string;
	    }
	    function getid(){
	        return $this->id;
	    }
	    function settitulo($string){
	        $this->titulo = $string;
	    }
	    function gettitulo(){
	        return $this->titulo;
	    }
	    function settexto($string){
	        $this->texto = $string;
	    }
	    function gettexto(){
	        return $this->texto;
	    }
	}

	class Servicos_equipe{
	    private $id;
	    private $titulo_vertical;
	    private $titulo2;
	    private $texto;
	    
	    function __construct($dado=null) {
	         if($dado != null):
	            $this->id = $dado['id'];
	            $this->titulo_vertical = $dado['titulo_vertical'];
	            $this->titulo2 = $dado['titulo2'];
	            $this->texto = $dado['texto'];
	         endif;
	    }
	    function setid($string){
	        $this->id = $string;
	    }
	    function getid(){
	        return $this->id;
	    }
	    function settitulo_vertical($string){
	        $this->titulo_vertical = $string;
	    }
	    function gettitulo_vertical(){
	        return $this->titulo_vertical;
	    }
	    function settitulo2($string){
	        $this->titulo2 = $string;
	    }
	    function gettitulo2(){
	        return $this->titulo2;
	    }
	    function settexto($string){
	        $this->texto = $string;
	    }
	    function gettexto(){
	        return $this->texto;
	    }
	}

	class Servicos_equipe_itens{
	    private $id;
	    private $imagem;
	    private $descricao;
	    
	    function __construct($dado=null) {
	         if($dado != null):
	            $this->id = $dado['id'];
	            $this->imagem = $dado['imagem'];
	            $this->descricao = $dado['descricao'];
	         endif;
	    }
	    function setid($string){
	        $this->id = $string;
	    }
	    function getid(){
	        return $this->id;
	    }
	    function setimagem($string){
	        $this->imagem = $string;
	    }
	    function getimagem(){
	        return $this->imagem;
	    }
	    function setdescricao($string){
	        $this->descricao = $string;
	    }
	    function getdescricao(){
	        return $this->descricao;
	    }
	}

	class Servicos_itens{
	    private $id;
	    private $imagem;
	    private $titulo;
	    private $texto;
	    
	    function __construct($dado=null) {
	         if($dado != null):
	            $this->id = $dado['id'];
	            $this->imagem = $dado['imagem'];
	            $this->titulo = $dado['titulo'];
	            $this->texto = $dado['texto'];
	         endif;
	    }
	    function setid($string){
	        $this->id = $string;
	    }
	    function getid(){
	        return $this->id;
	    }
	    function setimagem($string){
	        $this->imagem = $string;
	    }
	    function getimagem(){
	        return $this->imagem;
	    }
	    function settitulo($string){
	        $this->titulo = $string;
	    }
	    function gettitulo(){
	        return $this->titulo;
	    }
	    function settexto($string){
	        $this->texto = $string;
	    }
	    function gettexto(){
	        return $this->texto;
	    }
	}

	class Sobre{
	    private $id;
	    private $titulo;
	    private $texto;
	    private $imagem;
	    private $assinatura;
	    private $titulo_nossa_empresa;
	    private $texto_nossa_empresa;
	    private $titulo_missao;
	    private $texto_missao;
	    private $titulo_visao;
	    private $texto_visao;
	    private $titulo_valores;
	    private $texto_valores;
	    
	    function __construct($dado=null) {
	         if($dado != null):
	            $this->id = $dado['id'];
	            $this->titulo = $dado['titulo'];
	            $this->texto = $dado['texto'];
	            $this->assinatura = $dado['assinatura'];
	            $this->imagem = $dado['imagem'];
	            $this->titulo_nossa_empresa = $dado['titulo_nossa_empresa'];
	            $this->texto_nossa_empresa = $dado['texto_nossa_empresa'];
	            $this->titulo_missao = $dado['titulo_missao'];
	            $this->texto_missao = $dado['texto_missao'];
	            $this->titulo_visao = $dado['titulo_visao'];
	            $this->texto_visao = $dado['texto_visao'];
	            $this->titulo_valores = $dado['titulo_valores'];
	            $this->texto_valores = $dado['texto_valores'];
	         endif;
	    }
	    function setassinatura($string){
	    	$this->assinatura = $string;
	    }
	    function getassinatura(){
	    	return $this->assinatura;
	    }
	    function setid($string){
	        $this->id = $string;
	    }
	    function getid(){
	        return $this->id;
	    }
	    function settitulo($string){
	        $this->titulo = $string;
	    }
	    function gettitulo(){
	        return $this->titulo;
	    }
	    function settexto($string){
	        $this->texto = $string;
	    }
	    function gettexto(){
	        return $this->texto;
	    }
	    function setimagem($string){
	        $this->imagem = $string;
	    }
	    function getimagem(){
	        return $this->imagem;
	    }
	    function settitulo_nossa_empresa($string){
	        $this->titulo_nossa_empresa = $string;
	    }
	    function gettitulo_nossa_empresa(){
	        return $this->titulo_nossa_empresa;
	    }
	    function settexto_nossa_empresa($string){
	        $this->texto_nossa_empresa = $string;
	    }
	    function gettexto_nossa_empresa(){
	        return $this->texto_nossa_empresa;
	    }
	    function settitulo_missao($string){
	        $this->titulo_missao = $string;
	    }
	    function gettitulo_missao(){
	        return $this->titulo_missao;
	    }
	    function settexto_missao($string){
	        $this->texto_missao = $string;
	    }
	    function gettexto_missao(){
	        return $this->texto_missao;
	    }
	    function settitulo_visao($string){
	        $this->titulo_visao = $string;
	    }
	    function gettitulo_visao(){
	        return $this->titulo_visao;
	    }
	    function settexto_visao($string){
	        $this->texto_visao = $string;
	    }
	    function gettexto_visao(){
	        return $this->texto_visao;
	    }
	    function settitulo_valores($string){
	        $this->titulo_valores = $string;
	    }
	    function gettitulo_valores(){
	        return $this->titulo_valores;
	    }
	    function settexto_valores($string){
	        $this->texto_valores = $string;
	    }
	    function gettexto_valores(){
	        return $this->texto_valores;
	    }
	}

	class Sobre_banners{
	    private $id;
	    private $imagem;
	    private $descricao;
	    private $link;
	    
	    function __construct($dado=null) {
	         if($dado != null):
	            $this->id = $dado['id'];
	            $this->imagem = $dado['imagem'];
	            $this->descricao = $dado['descricao'];
	            $this->link = $dado['link'];
	         endif;
	    }
	    function setid($string){
	        $this->id = $string;
	    }
	    function getid(){
	        return $this->id;
	    }
	    function setimagem($string){
	        $this->imagem = $string;
	    }
	    function getimagem(){
	        return $this->imagem;
	    }
	    function setdescricao($string){
	        $this->descricao = $string;
	    }
	    function getdescricao(){
	        return $this->descricao;
	    }
	    function setlink($string){
	        $this->link = $string;
	    }
	    function getlink(){
	        return $this->link;
	    }
	}

	class Sobre_home{
	    private $id;
	    private $titulo;
	    private $texto;
	    private $projetos;
	    private $clientes;
	    private $parceiros;
	    private $premios;
	    
	    function __construct($dado=null) {
	         if($dado != null):
	            $this->id = $dado['id'];
	            $this->titulo = $dado['titulo'];
	            $this->texto = $dado['texto'];
	            $this->projetos = $dado['projetos'];
	            $this->clientes = $dado['clientes'];
	            $this->parceiros = $dado['parceiros'];
	            $this->premios = $dado['premios'];
	         endif;
	    }
	    function setid($string){
	        $this->id = $string;
	    }
	    function getid(){
	        return $this->id;
	    }
	    function settitulo($string){
	        $this->titulo = $string;
	    }
	    function gettitulo(){
	        return $this->titulo;
	    }
	    function settexto($string){
	        $this->texto = $string;
	    }
	    function gettexto(){
	        return $this->texto;
	    }
	    function setprojetos($string){
	        $this->projetos = $string;
	    }
	    function getprojetos(){
	        return $this->projetos;
	    }
	    function setclientes($string){
	        $this->clientes = $string;
	    }
	    function getclientes(){
	        return $this->clientes;
	    }
	    function setparceiros($string){
	        $this->parceiros = $string;
	    }
	    function getparceiros(){
	        return $this->parceiros;
	    }
	    function setpremios($string){
	        $this->premios = $string;
	    }
	    function getpremios(){
	        return $this->premios;
	    }
	}

	class Status_projeto{
	    private $id;
	    private $login;
	    private $senha;
	    private $nome;
	    private $status;
	    private $texto;
	    
	    function __construct($dado=null) {
	         if($dado != null):
	            $this->id = $dado['id'];
	            $this->login = $dado['login'];
	            $this->senha = $dado['senha'];
	            $this->nome = $dado['nome'];
	            $this->status = $dado['status'];
	            $this->texto = $dado['texto'];
	         endif;
	    }
	    function settexto($string){
	    	$this->texto = $string;
	    }
	    function gettexto(){
	    	return $this->texto;
	    }
	    function setsenha($string){
	    	$this->senha = $string;
	    }
	    function getsenha(){
	    	return $this->senha;
	    }
	    function setid($string){
	        $this->id = $string;
	    }
	    function getid(){
	        return $this->id;
	    }
	    function setlogin($string){
	        $this->login = $string;
	    }
	    function getlogin(){
	        return $this->login;
	    }
	    function setnome($string){
	        $this->nome = $string;
	    }
	    function getnome(){
	        return $this->nome;
	    }
	    function setstatus($string){
	        $this->status = $string;
	    }
	    function getstatus(){
	        return $this->status;
	    }
	}

	class Status_projeto_noticias{
	    private $id;
	    private $id_user;
	    private $noticia;
	    private $texto;
	    
	    function __construct($dado=null) {
	         if($dado != null):
	            $this->id = $dado['id'];
	            $this->id_user = $dado['id_user'];
	            $this->noticia = $dado['noticia'];
	            $this->texto = $dado['texto'];
	         endif;
	    }
	    function setid($string){
	        $this->id = $string;
	    }
	    function getid(){
	        return $this->id;
	    }
	    function setid_user($string){
	        $this->id_user = $string;
	    }
	    function getid_user(){
	        return $this->id_user;
	    }
	    function setnoticia($string){
	        $this->noticia = $string;
	    }
	    function getnoticia(){
	        return $this->noticia;
	    }
	    function settexto($string){
	        $this->texto = $string;
	    }
	    function gettexto(){
	        return $this->texto;
	    }
	}

	class Status_projetos_imagens{
	    private $id;
	    private $id_user;
	    private $imagem;
	    
	    function __construct($dado=null) {
	         if($dado != null):
	            $this->id = $dado['id'];
	            $this->id_user = $dado['id_user'];
	            $this->imagem = $dado['imagem'];
	         endif;
	    }
	    function setid($string){
	        $this->id = $string;
	    }
	    function getid(){
	        return $this->id;
	    }
	    function setid_user($string){
	        $this->id_user = $string;
	    }
	    function getid_user(){
	        return $this->id_user;
	    }
	    function setimagem($string){
	        $this->imagem = $string;
	    }
	    function getimagem(){
	        return $this->imagem;
	    }
	}

?>	