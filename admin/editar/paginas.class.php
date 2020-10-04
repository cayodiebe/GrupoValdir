<?php
	class Paginas {

		# Variáveis
		public $tabela, $icone, $titulo, $campoID, $campos, $aviso = false;

		# Paginas do Menu sem nível de acesso
		public $paginas_menu = array(

			'home_banners',
			'numeros',

			array(
				'Quem somos',
				'quemsomos_inicio',
				'quemsomos_mvv',
				'quemsomos_seguranca'
			),

			array(
				'Serviços',
				'categorias',
				'servicos'
			),

			'clientes',

	
			'seo'
		);


		# PÁGINAS POR NÍVEL DE ACESSO
		// public $paginas_menu;
		// function setPaginasMenu($array){
		// 	$this->paginas_menu = $array;
		// }

		# Páginas
		function __construct($pagina){

			# PÁGINAS POR NÍVEL DE ACESSO
			// $nivel = $_SESSION['usuarioNivel'];
			// if($nivel==0):
			// 	$this->setPaginasMenu(array('animes','posts','usuarios','links'));
			// elseif($nivel==1):
			// 	$this->setPaginasMenu(array('animes','posts'));
			// endif;

			switch($pagina):

				# case 'nome_da_tabela':
				# 	$this->tabela = "nome_da_tabela";
				#   $this->icone = "<i class='entypo-layout'></i>";
				# 	$this->titulo = "Titulo da Tabela";
				# 	$this->campoID = "id";
				#	$this->operacoes = array('inserir','listar','editar','deletar');
				#	$this->listar = array('id','campo01','campo02','campo03','select'=>array('tabela','titulo','id'),'acao'=>array('editar','deletar'));
				# 	$this->campos = array(
				# 		"input(text/number/input-preco/input-block)" => array('Nome','input',255,'Nome','text'),
				# 		"select" => array('Selecione','select','tabela','id','nome'),
				#       "select-multi" => array('Selecione','select','tabela','id','nome',true),
				# 		"upload-imagem" => array('Imagem','upload-img','../assets/uploads/',false,false),
				#		"upload-arquivo" => array('Arquivo','upload-file','../assets/uploads/'),
				#		"textarea/textarea2" => array('Texto','textarea',false,'Texto'),
				#		"data" => array('Data','date','Data'),
				#		"radiobutton" => array('Opção','radio', array('0' => 'Sim', '1' => 'Não')),
				#		"imagem" => array('Imagem','upload-img','../assets/uploads/',false,false,'thumb'=>array(270,270,'../assets/uploads/','thumb'))
				# 	);
				# break;

				case 'adm_usuarios':
					$this->icone = "<i class='entypo-users'></i>";
					$this->titulo = "ADM Usuários";
					$this->tabela = "adm_usuarios";
					$this->campoID = "id";
					$this->operacoes = array('inserir','listar','editar','deletar');
					$this->listar = array('id','nome','usuario','senha','nivel','acao'=>array('editar','deletar'));
					$this->campos = array(
						"nome" => array('Nome','input',255,'Nome','text'),
						"usuario" => array('Usuario','input',255,'Usuario','text'),
						"senha" => array('Senha','input',255,'Senha','text'),
						"nivel" => array('Nivel','input',255,'Nivel','text')
					);
				break;

				case 'seo':
					$this->icone = "<i class='entypo-search'></i>";
					$this->titulo = "SEO";
					$this->tabela = "seo";
					$this->campoID = "id";
					$this->operacoes = array('listar','editar');
					$this->listar = array('id','keywords','titulo_site','descricao_site','imagem_facebook','favicon','acao'=>array('editar'));
					$this->campos = array(
						"favicon" => array('Logotipo','upload-img','../assets/uploads/',false,false),
						"imagem_facebook" => array('Imagem','upload-img','../assets/uploads/',false,false),
						"titulo_site" => array('Titulo Site','input',255,'Titulo Site','text'),
						"descricao_site" => array('Descrição da empresa','textarea',false,'Digite aqui a descrição da empresa'),
						"keywords" => array('Keywords','input',255,'Keywords','text')
					);
				break;





				case 'categorias':
					$this->titulo = "Categorias";
					$this->tabela = "categorias";
					$this->campoID = "id";
					$this->operacoes = array('inserir','listar','editar','deletar');
					$this->listar = array('id','nome','slug','acao'=>array('editar','deletar'));
					$this->campos = array(
						"nome" => array('Nome','input',255,'Nome','text'),
						"slug" => array('Slug','input',255,'Slug','text')
					);
				break;

				case 'clientes':
					$this->titulo = "Clientes";
					$this->tabela = "clientes";
					$this->campoID = "id";
					$this->operacoes = array('inserir','listar','editar','deletar');
					$this->listar = array('id','imagem','link','acao'=>array('editar','deletar'));
					$this->campos = array(
						"imagem" => array('Imagem','upload-img','../assets/images/',false,false),
						"link" => array('Link','input',255,'Link','text')
					);
				break;

				case 'home_banners':
					$this->titulo = "Home Banners";
					$this->tabela = "home_banners";
					$this->campoID = "id";
					$this->operacoes = array('inserir','listar','editar','deletar');
					$this->listar = array('id','imagem','imagem_mobile','acao'=>array('editar','deletar'));
					$this->campos = array(
						"imagem" => array('Imagem','upload-img','../assets/images/',false,false),
						"imagem_mobile" => array('Imagem Mobile','upload-img','../assets/images/',false,false)
					);
				break;

				case 'numeros':
					$this->titulo = "Números";
					$this->tabela = "numeros";
					$this->campoID = "id";
					$this->operacoes = array('listar','editar');
					$this->listar = array('id','n1_titulo','n1_texto','n2_titulo','n2_texto','n3_titulo','n3_texto','n4_titulo','n4_texto','acao'=>array('editar'));
					$this->campos = array(
						"n1_titulo" => array('N1 Titulo','input',255,'N1 Titulo','text'),
						"n1_texto" => array('N1 Texto','textarea',false,'Digite aqui o N1 Texto'),
						"n2_titulo" => array('N2 Titulo','input',255,'N2 Titulo','text'),
						"n2_texto" => array('N2 Texto','textarea',false,'Digite aqui o N2 Texto'),
						"n3_titulo" => array('N3 Titulo','input',255,'N3 Titulo','text'),
						"n3_texto" => array('N3 Texto','textarea',false,'Digite aqui o N3 Texto'),
						"n4_titulo" => array('N4 Titulo','input',255,'N4 Titulo','text'),
						"n4_texto" => array('N4 Texto','textarea',false,'Digite aqui o N4 Texto')
					);
				break;

				case 'quemsomos_inicio':
					$this->titulo = "Início";
					$this->tabela = "quemsomos_inicio";
					$this->campoID = "id";
					$this->operacoes = array('listar','editar');
					$this->listar = array('id','imagem','titulo','texto','acao'=>array('editar'));
					$this->campos = array(
						"imagem" => array('Imagem','upload-img','../assets/images/',false,false),
						"titulo" => array('Titulo','input',255,'Titulo','text'),
						"texto" => array('Texto','textarea',false,'Digite aqui o Texto')
					);
				break;

				case 'quemsomos_mvv':
					$this->titulo = "Missão, Visão, Valores";
					$this->tabela = "quemsomos_mvv";
					$this->campoID = "id";
					$this->operacoes = array('listar','editar');
					$this->listar = array('id','missao_icone','missao_titulo','missao_texto','visao_icone','visao_titulo','visao_texto','valores_icone','valores_titulo','valores_texto','acao'=>array('editar'));
					$this->campos = array(
						"missao_icone" => array('Missao Icone','upload-img','../assets/images/',false,false),
						"missao_titulo" => array('Missao Titulo','input',255,'Missao Titulo','text'),
						"missao_texto" => array('Missao Texto','textarea',false,'Digite aqui o Missao Texto'),
						"visao_icone" => array('Visao Icone','upload-img','../assets/images/',false,false),
						"visao_titulo" => array('Visao Titulo','input',255,'Visao Titulo','text'),
						"visao_texto" => array('Visao Texto','textarea',false,'Digite aqui o Visao Texto'),
						"valores_icone" => array('Valores Icone','upload-img','../assets/images/',false,false),
						"valores_titulo" => array('Valores Titulo','input',255,'Valores Titulo','text'),
						"valores_texto" => array('Valores Texto','textarea',false,'Digite aqui o Valores Texto')
					);
				break;

				case 'quemsomos_seguranca':
					$this->titulo = "Segurança";
					$this->tabela = "quemsomos_seguranca";
					$this->campoID = "id";
					$this->operacoes = array('listar','editar');
					$this->listar = array('id','titulo','texto','imagem1','imagem2','imagem3','imagem4','imagem5','imagem6','imagem7','imagem8','acao'=>array('editar'));
					$this->campos = array(
						"titulo" => array('Titulo','input',255,'Titulo','text'),
						"texto" => array('Texto','textarea',false,'Digite aqui o Texto'),
						"imagem1" => array('Imagem1','upload-img','../assets/images/',false,false),
						"imagem2" => array('Imagem2','upload-img','../assets/images/',false,false),
						"imagem3" => array('Imagem3','upload-img','../assets/images/',false,false),
						"imagem4" => array('Imagem4','upload-img','../assets/images/',false,false),
						"imagem5" => array('Imagem5','upload-img','../assets/images/',false,false),
						"imagem6" => array('Imagem6','upload-img','../assets/images/',false,false),
						"imagem7" => array('Imagem7','upload-img','../assets/images/',false,false),
						"imagem8" => array('Imagem8','upload-img','../assets/images/',false,false)
					);
				break;

				case 'servicos':
					$this->titulo = "Serviços";
					$this->tabela = "servicos";
					$this->campoID = "id";
					$this->operacoes = array('inserir','listar','editar','deletar');
					$this->listar = array('id','categoria'=>array('categorias','nome','id'),'imagem','titulo','slug','texto','acao'=>array('editar','deletar'));
					$this->campos = array(
						"categoria" => array('Categoria','select','categorias','id','nome'),
						"imagem" => array('Imagem','upload-img','../assets/images/',false,false),
						"titulo" => array('Titulo','input',255,'Titulo','text'),
						"slug" => array('Slug','input',255,'Slug','text'),
						"texto" => array('Texto','textarea',false,'Digite aqui o Texto')
					);
				break;




			endswitch;
		}
	}
?>