<?php
/*CBTIS 89
Programa que almacena datos es un arreglo
Axel Jesus Galvan Sanchez
3°A Programacion T.M. 
*/
$nombre = "Axel";
$nombres = array("Juan","Ana","Carlos","Luis","Maria","Sofia","Pedro","Dana");
foreach($nombres as $n){
	if ($n == $nombre){
		echo "Este nombre esta en el Array";
	}
}
?>