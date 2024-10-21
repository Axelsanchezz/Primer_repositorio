<?php 
/*CBTIS 89
Programa que almacena datos es un arreglo
Axel Jesus Galvan Sanchez
3°A Programacion T.M. 
*/

$numeros= range (1,100);
for ($i=0; $i <count ($numeros); $i++){
	if($numeros [$i] %2 == 0){
		echo $numeros [$i] . "<br>";
	}
}
?>