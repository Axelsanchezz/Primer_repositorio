<?php
/*CBTIS 89
Programa que almacena datos en un arreglomultidimensional y posteriormente los imprime en diferentes posiciones
Axel Jesus Galvan Sanchez
3°A Programacion T.M. 
*/

$datos = array(
array(10, 20, 30),array(40, 50, 60),array(70, 80, 90));

echo "NORMAL";
echo "<br>";
for($i=0;$i<3;$i++)
	{ for($j=0;$j<3;$j++)
	        {echo $datos[$i][$j]." ";}

	        echo "<br>";
}
echo "FILAS COLUMNAS";
echo "<br>";
for($j=0;$j<3;$j++)
    { for($i=0;$i<3;$i++)
	        {echo $datos[$i][$j]." ";}

	        echo "<br>";
}
echo "COLUMNAS INVERSAS";
echo "<br>";
for($i=0;$i<3;$i++)
    { for($j=2;$j>=0;$j--)
	        {echo $datos[$i][$j]." ";}

	        echo "<br>";
}
echo "FILAS INVERSAS";
echo "<br>";
for($i=2;$i>=0;$i--)
    { for($j=0;$j<3;$j++)
	        {echo $datos[$i][$j]." ";}

	        echo "<br>";
}