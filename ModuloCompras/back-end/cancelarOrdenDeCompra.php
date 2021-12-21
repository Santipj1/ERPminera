<?php
include('conexion.php');

	$idCompra=$_POST['codCompra'];


	mysqli_query($obj_conexion, "DELETE FROM orden_de_compra WHERE idOrden_de_Compra='$idCompra'");

	mysqli_close($obj_conexion);

	echo '<script language="javascript">window.location="../front-end/MINA_ORDENDECOMPRA/cancelarCompra.html"</script>';
?>