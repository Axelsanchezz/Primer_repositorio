<?php
/* CBTIS 89
Programa que almacena el nombre de cutro personas en un arreglo Alumos y en otro arreglo multidimensional llamado Calificaciones almacena las calificaciones de cada uno de ellos por medio de filas y columnas
Axel Jesus Galvan Sanchez
3°A Programación T.M.
*/

$Alumos = array("Luz","Fer","Leo","Ale");
$Promedio = array();
$Status = array();
$Calificaciones = array(array(6,4,5),array(7,9,8),array(7,9,5),array(5,4,6));

$lomgitud = count();

for($i=0;$i<3;$i++)
	{ for($j=0;$j<4;$j++)
	        {echo $datos[$i][$j]." ";}

	    }

	    for($i=0; $i<$longitud; $i++)
	    	{echo $Alumno[$i] , $Promedio[$i] (6+4+5/3) ;
	    echo "<br>";
	}

	    for($i=0; $i<$lomgitud; $i++)
	    	{echo $Alumno[$i] , $Promedio[$i] (7+9+8/3);
	    echo "<br>";
	}

	    for($i=0; $i<$lomgitud; $i++)
	    	{echo $Alumno[$i] , $Promedio[$i] (7+9+5/3);
	    echo "<br>";
	}

	    for($i=0; $i<$lomgitud; $i++)
	    	{echo $Alumno[$i] , $Promedio[$i] (5+4+6/3);
	    echo "<br>";
	}


	for($i=0; $i>=6; $i++)
	{ {echo $Status[$i][$j]." Aprobado ";}
echo "<br>";
}

     for($i=0; $i<6; $i++)
	{ {echo $Status[$i][$j]." Reprobado ";}
echo "<br>";
}
 echo "CBTIS 89 <br>";
   echo "Alumnos Promedio Status <br>";
   for ($k =0; $k < count(); $k++) {
   	echo $Alumnos[$k] ."-------" . $Promedio[$k] . "-------" . $Status[$k] . "<br>";
   }
   ?>






	        