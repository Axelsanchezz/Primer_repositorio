<?php
/*CBTIS 89
Programa que almacena datos es un arreglo
Axel Jesus Galvan Sanchez
3°A Programacion T.M. 
*/

$productos = array("Camisa","Pantalon","Cinturon","Gorra","Calcetines");

echo "Array de productos iniciales: <br>";
foreach ($productos as $producto){
	echo $producto . "<br>";
}
sort ($productos);
echo "<br> Array de productos en orden ascendente:<br>";
foreach ($productos as $producto){
	echo $productos . "<br>";
}
sort ($productos);
echo "<br> Array de productos en orden descendientes:<br>";
foreach ($productos as $producto){
	echo $productos . "<br>";
}
?>
