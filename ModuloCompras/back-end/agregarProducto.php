<?php


	include('conexion.php');

	
	$nomArticulo=$_POST['nomArticulo'];
	$cantidad=$_POST['cantidad'];
	$Idcompra=$_POST['Idcompra'];

	

	if(validarSiExiste($nomArticulo,$Idcompra)==0){
		$array2=buscarIdArticulo($nomArticulo);

		$idArticulo=$array2[0];

		$idItemComrpo=retornarContItemCom()+1;
		

		$seleccion=mysqli_query($obj_conexion,"INSERT INTO item_compro (idItem_Compro,idArticulo,Orden_de_Compra_idOrden_de_Compra) VALUES (
			'$idItemComrpo','$idArticulo','$Idcompra')");

		$array=retornarInfoCompra($Idcompra);
		$cantPro=$array[1]+(int)$cantidad;
		$valCompra=$array[0]+($cantidad*buscarPrecioArticulo($nomArticulo));
		

		

		$cantArti=$array2[1]+$cantidad;
		//$codArt=$array[0];


		mysqli_query($obj_conexion, "UPDATE orden_de_compra SET val_Compra = '$valCompra', Cant_Producto= '$cantPro' WHERE idOrden_de_Compra = '$Idcompra'");

		mysqli_query($obj_conexion, "UPDATE articulo SET cantidadPedida = '$cantidad', cantidad= '$cantArti' WHERE idArticulo = '$idArticulo'");

		echo "Se agrego el Producto";
	}else{
		echo "No se Pudo Agregar el Producto";
	}



	function buscarIdArticulo($nomArticulo){
		include('conexion.php');
		$seleccion=mysqli_query($obj_conexion,"SELECT * FROM articulo");

		while($fila = mysqli_fetch_array($seleccion)){
			if($fila['nombre']==$nomArticulo){

				$array=array($fila['idArticulo'],$fila['cantidad']);
				return $array;
			}
		}	
	}

	function validarSiExiste($nomArticulo, $Idcompra){
		include('conexion.php');
		$cont=0;
		$array=buscarIdArticulo($nomArticulo);
		$seleccion=mysqli_query($obj_conexion,"SELECT * FROM item_compro");
		while($fila = mysqli_fetch_array($seleccion)){
			if($fila['Orden_de_Compra_idOrden_de_Compra']==$Idcompra && $fila['idArticulo']==$array[0]){
				$cont=$cont+1;
			}
		}
		return $cont;
	}

	function retornarContItemCom(){
		include('conexion.php');
		$cont=0;
		$seleccion=mysqli_query($obj_conexion,"SELECT * FROM item_compro");
		while($fila = mysqli_fetch_array($seleccion)){
			$cont++;
		}
		return $cont;
	}

	function buscarPrecioArticulo($nomArticulo){
		include('conexion.php');
		$seleccion=mysqli_query($obj_conexion,"SELECT * FROM articulo");

		while($fila = mysqli_fetch_array($seleccion)){
			if($fila['nombre']==$nomArticulo){
				return $fila['precio'];
			}
		}	
	}

	function retornarInfoCompra($Idcompra){
		include('conexion.php');
		$seleccion=mysqli_query($obj_conexion,"SELECT * FROM orden_de_compra");
		while($fila = mysqli_fetch_array($seleccion)){
			if($fila['idOrden_de_Compra']==$Idcompra){
				$array = array($fila['val_Compra'],$fila['Cant_Producto']);
				return $array;
			}
		}
	}

	
?>

