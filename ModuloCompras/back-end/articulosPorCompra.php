<?php

include('conexion.php');
    $Idcompra=$_POST['Idcompra'];

	$seleccion=mysqli_query($obj_conexion,"SELECT * FROM item_compro");
	$rta="";

	
    $rta.="<tr>";
    $rta.="<th class='text-center'>CODIGO</th>";
    $rta.="<th class='text-center'>NOMBRE.</th>";
    $rta.="<th class='text-center'>CANT.</th>";
    $rta.="<th class='text-center'>PRECIO TOTAL</th>";
    $rta.="<th></th>";
    $rta.="</tr>";

while($fila = mysqli_fetch_array($seleccion)){

    if($fila['Orden_de_Compra_idOrden_de_Compra']==$Idcompra){
        $array=bucarInfoArticulo($fila['idArticulo']);
        $rta.="<tr>";
        $rta.="<td class='text-center'>".$fila['idArticulo']."</td>";
        $rta.="<td class='text-center'>".$array[0]."</td>";
        $rta.="<td class='text-center'>".$array[1]."</td>";
        $rta.="<td class='text-center'>".$array[2]*$array[1]."</td>";
        //$rta.="<td></td>";
        $rta.="</tr>";
    }
	
    
    


}
	
    function bucarInfoArticulo($idArticulo){
        include('conexion.php');
        $seleccion=mysqli_query($obj_conexion,"SELECT * FROM articulo");
        while($fila = mysqli_fetch_array($seleccion)){
            if($fila['idArticulo']==$idArticulo){
                $array=array($fila['nombre'],$fila['cantidadPedida'],$fila['precio']);
                return $array;
            }
        }
    
    }
echo $rta;


?>