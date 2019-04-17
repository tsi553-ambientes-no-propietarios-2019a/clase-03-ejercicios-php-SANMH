
<?php

for($tabla=1; $tabla<=12; $tabla++) 
{
 echo "<h3>Tabla del $tabla </h3>";
 
 for($i=1; $i<=12; $i++) 
 {
  echo "$tabla x $i = ". ($tabla*$i) . "<br/>";
 }
}
