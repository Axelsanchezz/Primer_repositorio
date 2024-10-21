<?php
/*CBTIS 89
Programa que almacena datos es un arreglo
Axel Jesus Galvan Sanchez
3°A Programacion T.M. 
*/
echo "Array original";
    echo "<br>";

$array=array("Pedro","Brenda","Axel","Karla","Danna","Keira");
$longitud = count($array);

sort($array);
for($i=0; $i<$longitud; $i++)
{
 echo $array [$i];
 echo "<br>;"
}    
echo "<p>";

echo "Array Despues De Agregar Nombres";
echo "<br>";

array_push($array,"Adilene","Cossio","Andrea","Emma");
unset($array[3],$array[5]);
$longitud = count($array);

rsort($array);
for($i=0; $i<$longitud; $i++)
{
	echo $array [$i];
	echo "<br>";
}
echo "<br>";
echo "El numero de elementos actual en el arreglo es de: 8";
?>