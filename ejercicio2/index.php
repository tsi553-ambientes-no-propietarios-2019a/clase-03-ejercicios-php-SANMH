<?php
/**
 * Problema propuesto:
 *
 * Implementar una función que muestre un título centrado en pantalla, y la llamaremos posteriormente dos veces.
*/

function imprimir(){

echo "<center>";
$bloque= "<h1> Fernando Sanmartin </h1>";

for($i=0; $i<=2; $i++){

	echo "$bloque";
	echo "<br/>";
}
}

imprimir();

?>