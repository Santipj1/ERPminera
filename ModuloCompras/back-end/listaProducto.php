<?php

include('conexion.php');


	$seleccion=mysqli_query($obj_conexion,"SELECT * FROM articulo");
	$rta="";
	$con=1;
	$rta.="<thead id=".'idArtculo'.">";
 
    $rta.="<tr class=".'bg-primary text-white'." align=".'center'.">";
    $rta.="<th scope=".'col'.">Id Articulo</th>";
    $rta.="<th scope=".'col'.">Nombre</th>";
    $rta.="<th scope=".'col'.">Precio</th>";
    $rta.="<th scope=".'col'.">Cantidad</th>";
    $rta.="</tr>";
  	$rta.="</thead>";
  	$rta.="<tbody>";

while($fila = mysqli_fetch_array($seleccion)){

	
    $rta.="<tr>";
    $rta.="<td>".$fila['idArticulo']."</td>";
    $rta.="<td>".$fila['nombre']."</td>";
    $rta.="<td>$".$fila['precio']."</td>";
    $rta.="<td>".$fila['cantidad']."</td>";
    $rta.="</tr>";

}
	$rta.="</tbody>";

echo $rta;


?>