<?php

include('conexion.php');


	$seleccion=mysqli_query($obj_conexion,"SELECT * FROM proveedor");
	$rta="";
	$con=1;
	$rta.="<thead id=".'idProveedor'.">";
 
    $rta.="<tr class=".'bg-primary text-white'." align=".'center'.">";
    $rta.="<th scope=".'col'.">Item</th>";
    $rta.="<th scope=".'col'.">Codigo Proveedor</th>";
    $rta.="<th scope=".'col'.">Nombre Proveedor</th>";
    $rta.="<th scope=".'col'.">Direccion Proveedor</th>";
    $rta.="<th scope=".'col'.">Telefono Proveedor</th>";
    $rta.="</tr>";
  	$rta.="</thead>";
  	$rta.="<tbody>";

while($fila = mysqli_fetch_array($seleccion)){

	
    $rta.="<tr>";
    $rta.="<th scope=".'row'.">$con</th>";
    $rta.="<td>".$fila['idProveedor']."</td>";
    $rta.="<td>".$fila['nom_Proveedor']."</td>";
    $rta.="<td>".$fila['direc_Proveedor']."</td>";
    $rta.="<td>".$fila['tel_Proveedor']."</td>";
    $rta.="</tr>";
      	

	$con=$con+1;

}
	$rta.="</tbody>";
  

echo $rta;

?>