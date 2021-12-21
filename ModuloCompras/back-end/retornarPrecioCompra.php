<?php

	include('conexion.php');
	

	$Idcompra=$_POST['Idcompra'];



	$seleccion=mysqli_query($obj_conexion,"SELECT * FROM orden_de_compra");
	$valor=0;
	while($fila = mysqli_fetch_array($seleccion)){

			if($fila['idOrden_de_Compra']==$Idcompra){
				$valor= $fila['val_Compra'];
				
			}
		}
	
	echo "$".$valor;
?>

