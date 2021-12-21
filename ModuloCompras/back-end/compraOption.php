<?php

	include('conexion.php');

	$rta="";
	

	$seleccion=mysqli_query($obj_conexion,"SELECT * FROM orden_de_compra");

	while($fila = mysqli_fetch_array($seleccion)){

	$rta.='<option value='.$fila['idOrden_de_Compra'].'>'.$fila['idOrden_de_Compra'].'</option>';
	

	}
	echo $rta;


?>