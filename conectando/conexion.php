<?php 
$pwd = ""; $user = "root"; $db_name = "hoteleria_list";

try {   
	$database = new PDO ('mysql:host=localhost;dbname='.$db_name, $user,$pwd,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (Exception $e) {
    echo "Ocurrió un problema con la conexion: ".$e->getMessage();
}
?>