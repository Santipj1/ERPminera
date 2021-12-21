<?php

	include('conexion.php');

	$rta="";
	

	$seleccion=mysqli_query($obj_conexion,"SELECT * FROM proveedor");

	while($fila = mysqli_fetch_array($seleccion)){

	$rta.='<option value='.$fila['idProveedor'].'>'.$fila['idProveedor'].'</option>';
	

	}
	echo $rta;


?>