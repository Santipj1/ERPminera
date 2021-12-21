<?php 

include('conexion.php');

	
		$idProveedor=$_POST['codProveedor'];
		$nomProveedor=$_POST['nomProveedor'];
		$dirProveedor=$_POST['dirEmpresa'];
		$telProveedor=$_POST['phone'];
		
	

		mysqli_query($obj_conexion, "INSERT INTO proveedor (idProveedor,nom_Proveedor,direc_Proveedor,tel_Proveedor) VALUES ('$idProveedor','$nomProveedor','$dirProveedor','$telProveedor')");

	


		
		mysqli_close($obj_conexion);

		echo '<script language="javascript">window.location="../front-end/MINA_ORDENDECOMPRA/regProveedores.html"</script>';
		
		

	

 ?>