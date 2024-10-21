<?php 
/* CBTIS 89
Programa que almacena los nombres de 6 personas en un arreglo y posteriormente los imprime 
Axel Jesus Galvan Sanchez
3°A Programación T.M.
*/

$nombre1 = "Daniel";
$nombre2 = "Karla";
$nombre3 = "Diego";
$nombre4 = "Ximena";
$nombre5 = "Jesus";
$nombre6 = "Paola";

$array = array($nombre1. " " .$nombre2. " " .$nombre3. " " .$nombre4. " " .$nombre5. " " .$nombre6);
//Se obtiene el número de elementos
$longitud = count($array);

//Recorte todos los elemento
for($i=0; $i<$longitud; $i++)
{//Se obtiene el valor de cada elemento
echo $array [$i];
echo "<br>";
}
?>