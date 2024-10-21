<?php
/*Programa que almacena diversos datos en un arreglo y posteriormente los imprime
Axel Jesus Galvan Sanchez
3°A Programación T.M.
*/

$equipo = array("portero"=>"Julio","defensa"=>"Diego","medio"=>"Jair","delantero"=>"Rafa");
echo "** SELECCION NACIONAL **","<br>","<br>";
foreach($equipo as $posición=>$jugador)
{ echo "El Jugador " . $jugador . " es el " . $posición;
echo "<br>","<br>";
}
?>