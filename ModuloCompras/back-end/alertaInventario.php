<?php

	include('conexion.php');

	$seleccion=mysqli_query($obj_conexion,"SELECT * FROM articulo");
	$articulos="";
	
	

while($fila = mysqli_fetch_array($seleccion)){

	if($fila['cantidad']<=$fila['cantidadMinima']){

		$articulos.=$fila['nombre']."=".$fila['cantidad']."\n";

	}

}

	if($articulos!=""){
		$mensaje="Los Articulos: "."\n".$articulos."\n"." pasaron su estan minimo. Solicitar compra inmediata";
		echo $mensaje;
	
	}

		
	

	

	
	
?>