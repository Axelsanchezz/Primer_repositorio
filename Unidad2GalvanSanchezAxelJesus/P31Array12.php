<?php
/*CBTIS 89
Programa que almacena datos es un arreglo
Axel Jesus Galvan Sanchez
3°A Programacion T.M. 
*/

$arraynumerico = array (1,3,2,5,4,7,6);

//orden ascendiente
sort($arraynumerico);
var_export($arraynumerico);

echo "<br>";

//orden descendente
rsort($arraynumerico);
var_export($arraynumerico);
?>