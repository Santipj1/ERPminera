<?php

	include('conexion.php');

	$rta="";
	

	$seleccion=mysqli_query($obj_conexion,"SELECT * FROM administrat");

	while($fila = mysqli_fetch_array($seleccion)){

	$rta.='<option value='.$fila['idPersona_Adm'].'>'.$fila['idPersona_Adm'].'</option>';
	

	}
	echo $rta;


?>

