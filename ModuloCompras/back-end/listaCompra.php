<?php
include('conexion.php');

	$seleccion=mysqli_query($obj_conexion,"SELECT * FROM orden_de_compra");
	$rta="";
	$con=1;
	$rta.="<thead id=".'idCompra'.">";
 
    $rta.="<tr class=".'bg-primary text-white'." align=".'center'.">";
    $rta.="<th scope=".'col'.">Item</th>";
    $rta.="<th scope=".'col'.">Codigo Compra</th>";
    $rta.="<th scope=".'col'.">Cantidad Producto</th>";
    $rta.="<th scope=".'col'.">Valor Total</th>";
    $rta.="<th scope=".'col'.">Fecha</th>";
    $rta.="</tr>";
  	$rta.="</thead>";
  	$rta.="<tbody>";

while($fila = mysqli_fetch_array($seleccion)){

	
    $rta.="<tr>";
    $rta.="<th scope=".'row'.">$con</th>";
    $rta.="<td>".$fila['idOrden_de_Compra']."</td>";
    $rta.="<td>".$fila['Cant_Producto']."</td>";
    $rta.="<td>".$fila['val_Compra']."</td>";
    $rta.="<td>".$fila['Fecha']."</td>";
    $rta.="</tr>";
    
  	

	$con=$con+1;

}
	$rta.="</tbody>";
  


echo $rta;

?>