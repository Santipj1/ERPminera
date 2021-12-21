<?php

	include('conexion.php');

	$rta="";
	

	$seleccion=mysqli_query($obj_conexion,"SELECT * FROM tipo_comp_tipo_serv");

	while($fila = mysqli_fetch_array($seleccion)){

	$rta.='<option value='.$fila['descripcion'].'>'.$fila['descripcion'].'</option>';
	

	}
	echo $rta;


?>
