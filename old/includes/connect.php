<?php 
	//Connects to the database
	try {
        $db = new PDO("mysql:host=".db_server.";dbname=".db_name,db_user,db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")); 
        } catch(Exception $e) {
        echo "There was a connection error with the database.<br>";
        echo "<strong>Erro:</strong> ".$e->getMessage();
        #echo "<pre>"; print_r($e); echo "</pre>";
    }

 ?>