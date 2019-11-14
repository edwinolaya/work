<?php 
require_once("conexion.php");
//@$link=conectarse();

$selMoti=$con->query("SELECT * FROM empresas");//consulta

$data = [];//crear array

foreach ($selMoti as $key => $value) //recorremos todos los datos de la consulta y asociamos a value
	{
		$data[] = array(
			"id" => $value['Codigo'],
			//"codigo" => $value['Codigo'].' - '.$value['Nombre'],
			"nombre" => $value['Nombre']
		);
	}
	echo json_encode($data,JSON_UNESCAPED_UNICODE);//se crea el json y se envia para utilizar
?>