<?php
include('conexion.php');

	$idProveedor=$_POST['codProveedor'];
	$nomProveedor=$_POST['nomProveedor'];
	$dirProveedor=$_POST['dirEmpresa'];
	$telProveedor=$_POST['teleProveedor'];

	

	


	mysqli_query($obj_conexion, "UPDATE proveedor SET nom_Proveedor = '$nomProveedor', direc_Proveedor= '$dirProveedor', tel_Proveedor= '$telProveedor' WHERE idProveedor = '$idProveedor'");


	mysqli_close($obj_conexion);

	echo '<script language="javascript">window.location="../front-end/MINA_ORDENDECOMPRA/editProveedores.html"</script>';
	

?>