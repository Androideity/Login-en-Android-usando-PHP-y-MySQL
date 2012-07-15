
<?php

/*LOGIN*/

$usuario = $_POST['usuario'];
$passw = $_POST['password'];


require_once 'funciones_bd.php';
$db = new funciones_BD();

	if($db->login($usuario,$passw)){

	$resultado[]=array("logstatus"=>"0");
	}else{
	$resultado[]=array("logstatus"=>"1");
	}

echo json_encode($resultado);




?>
