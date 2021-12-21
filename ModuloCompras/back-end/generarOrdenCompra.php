<?php 

	include('conexion.php');
	include('plantillaPDF.php');

	$pdf= new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Arial', 'B', 12);

	$idCompra=$_POST['Idcompra'];
	$proveedor=$_POST['proveedor'];
	$tipoCompra=$_POST['tipo'];
	$medioPago=$_POST['condiciones'];


	$pdf->SetFillColor(232,232,232);

	$pdf->Cell(30,6,'Id Compra: '.$idCompra,1,0,'C',1);
	$pdf->Cell(40,6,'Proveedor: '.$proveedor,1,0,'C',1);
	$pdf->Cell(60,6,'Tipo Compra: '.$tipoCompra,1,0,'C',1);
	$pdf->Cell(50,6,'Medio Pago: '.$medioPago,1,1,'C',1);

	$pdf->Cell(30,6,'Id Articulo',1,0,'C',1);
	$pdf->Cell(50,6,'Nombre Articulo',1,0,'C',1);
	$pdf->Cell(30,6,'Cant Pedida',1,0,'C',1);
	$pdf->Cell(40,6,'Precio Unitario',1,0,'C',1);
	$pdf->Cell(30,6,'Precio Total',1,1,'C',1);

	$pdf->SetFont('Arial', '', 10);
	$precioTot=0;

	$seleccion=mysqli_query($obj_conexion,"SELECT * FROM item_compro");
	
	while($fila = mysqli_fetch_array($seleccion)){

		if($fila['Orden_de_Compra_idOrden_de_Compra']==$idCompra){

			$array=buscarInfoArticulo($fila['idArticulo']);

			$pdf->Cell(30,6,$fila['idArticulo'],1,0,'C');
			$pdf->Cell(50,6,$array[0],1,0,'C');
			$pdf->Cell(30,6,$array[1],1,0,'C');
			$pdf->Cell(40,6,"$".$array[2],1,0,'C');
			$pdf->Cell(30,6,"$".$array[2]*$array[1],1,1,'C');


			$precioTot+=$array[2]*$array[1];
	
		}

		

	}

	function buscarInfoArticulo($idArticulo){
		include('conexion.php');
		$seleccion=mysqli_query($obj_conexion,"SELECT * FROM articulo");
	
		while($fila = mysqli_fetch_array($seleccion)){

			if($fila['idArticulo']==$idArticulo){
				$array=array($fila['nombre'],$fila['cantidadPedida'],$fila['precio']);
				return $array;
			}
		}
	}


	$pdf->Cell(150,6,'Cantidad Total',1,0,'C');
	$pdf->Cell(30,6,"$".$precioTot,1,1,'C');

	$pdf->Output('D');





?>