<?php
/*Programa que almacena diversos datos en un arreglo y posteriormente los imprime
Axel Jesus Galvan Sanchez
3°A Programación T.M.
*/
$datos=array(" Programación "=>" Sebastian "," Contabilidad "=>" Dylan "," Electronica "=>"Manuel"," Programacion"=>" Vanessa "," ARH ");

echo "** DATOS DE ALUMNO DEL CBTIS 89 **", "<br>" , "<br>";

foreach($datos as $especialidad=>$nombre) 
	{ echo "El/La alumn@ " . $nombre . " esta en la especialidad de " . $especialidad;
      echo "<br>" , "<br>";
      }
      ?>