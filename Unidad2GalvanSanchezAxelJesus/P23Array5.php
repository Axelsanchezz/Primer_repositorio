<?php
/*Programa que almacena diversos datos en un arreglo y posteriormente los imprime
Axel Jesus Galvan Sanchez
3°A Programación T.M.
*/

$Mercado = array("manzana"=>"25","mango"=>"40","limon"=>"35","naranja"=>"20");
echo "** FRUTERÍA DEL SUR **","<br>","<br>";
foreach($Mercado as $Precio=>$Frutas)
{ echo "El kilo de " . $Precio . " cuesta " . $Frutas;
echo "<br>","<br>";
}
?>