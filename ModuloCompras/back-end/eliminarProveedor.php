<?php
include('conexion.php');

	$idProveedor=$_POST['codProveedor'];


	mysqli_query($obj_conexion, "DELETE FROM proveedor WHERE idProveedor='$idProveedor'");

	mysqli_close($obj_conexion);

	echo '<script language="javascript">window.location="../front-end/MINA_ORDENDECOMPRA/eliminarProveedor.html"</script>';
?>