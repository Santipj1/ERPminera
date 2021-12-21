<?php 

include('conexion.php');



	
		$idCompra=$_POST['idCompra'];
		$tipoServicio=$_POST['tipoServicio'];
		$admini=$_POST['idAdmin'];
		

		date_default_timezone_set('America/Bogota');
		$fechaActual=date("Y-m-d H:i:s");

		$servicio=null;
		if($tipoServicio=='Insumos'){
			$servicio='1';
		}if($tipoServicio=='Servicios'){
			$servicio='2';
		}if($tipoServicio=='Maquinaria'){
			$servicio='3';
		}if($tipoServicio=='Combustible'){
			$servicio='4';
		}

		
	
		mysqli_query($obj_conexion, "INSERT INTO orden_de_compra (idOrden_de_Compra,Tipo_Comp_Tipo_Serv_idTipo_Comp_Tipo_Serv,Administrat_idPersona_Adm,Fecha) VALUES (
			'$idCompra','$servicio','$admini','$fechaActual')");





		
		mysqli_close($obj_conexion);

		echo '<script language="javascript">window.location="../front-end/MINA_ORDENDECOMPRA/regCompra.html"</script>';


	

	

 ?>