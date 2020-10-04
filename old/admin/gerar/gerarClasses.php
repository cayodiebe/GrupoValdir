<?php
	header('Content-Type: text/plain');
    require '../editar/configuracoes.inc.php';
	require '../functions/db_connect.inc.php';

    $paginas_menu = "";
    $sql_table = mysql_query("SHOW TABLES");
    while($row_table = mysql_fetch_array($sql_table)):
		$campos = "";
    	$tabela = $row_table[0];
      
        echo '
class '.ucfirst($tabela).'{
    ';
      
        $sql_coluna = mysql_query("SHOW COLUMNS FROM $tabela");
        while($row_coluna = mysql_fetch_array($sql_coluna)):
            echo 'private $'.$row_coluna['Field'].';
    ';
        endwhile;
            echo '
    function __construct($dado=null) {
         if($dado != null):';

        $sql_coluna = mysql_query("SHOW COLUMNS FROM $tabela");
        while($row_coluna = mysql_fetch_array($sql_coluna)):
            echo '
            $this->'.$row_coluna['Field'].' = $dado[\''.$row_coluna['Field'].'\'];';
         endwhile;
         echo '
         endif;
    }';
//         echo '

        $sql_coluna = mysql_query("SHOW COLUMNS FROM $tabela");
        while($row_coluna = mysql_fetch_array($sql_coluna)):
           echo '
    function set'.$row_coluna['Field'].'($string){
        $this->'.$row_coluna['Field'].' = $string;
    }
    function get'.$row_coluna['Field'].'(){
        return $this->'.$row_coluna['Field'].';
    }';
        endwhile;

         echo '
}
';
        
    endwhile;

?>