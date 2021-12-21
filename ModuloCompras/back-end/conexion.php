<?php



	$usuario="root";
	$contra="";
	$baseDatos="minacarbon2";
	$servidor="localhost";

$obj_conexion = mysqli_connect($servidor,$usuario,$contra,$baseDatos);
if(!$obj_conexion)
{
    die("No se pudo realizar la conexion a la BD".mysqli_connect_error());
}



?>