<?php
/**
 Sabiendo que la función rand nos retorna un valor aleatorio entre un rango de dos enteros:
$num=rand(1,100);
En la variable $num se almacena un valor entero que la computadora genera en forma aleatoria entre 1 y 100.
Hacer un programa que lo muestre por pantalla al valor generado. Mostrar además si es menor o igual a 50 o si es mayor.
Para imprimir el contenido de una variable también utilizamos el comando echo:
echo $num;
 */

$numero = rand(1,100);
echo $numero;
echo "<br/>";

if($numero < 50) {

	echo "El numero es menor o igual a 50";

}

else {
	echo "El numero es mayor o igual a 50";

}

