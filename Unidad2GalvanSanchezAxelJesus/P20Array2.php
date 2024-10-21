<?php

/* CBTIS 89
Programa que almacena diversos datos en un arreglo y posteriormente los imprime por medio de un ciclo for
Axel Jesus Galvan Sanchez
3°A Programación T.M.
*/

$nombre = "Sofia";
$array = array(1, 2, 3, " Casa ", $nombre);

//Se obtiene el numero de elementos 
//$longitud = count0($array);

//Recorre todos los elementos
for ($i=0; $i<5; $i++)
	{//Se obtiene el valor de cada elemento
		echo $array [$i];
		echo "<br>";
	}
	?>