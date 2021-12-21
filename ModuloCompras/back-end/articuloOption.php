<?php

	include('conexion.php');

	$rta="";
	

	$seleccion=mysqli_query($obj_conexion,"SELECT * FROM articulo");

	while($fila = mysqli_fetch_array($seleccion)){

	$rta.='<option value='.$fila['idArticulo'].'>'.$fila['idArticulo'].'</option>';
	

	}
	echo $rta;


?>