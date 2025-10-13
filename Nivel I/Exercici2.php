<?php

$pueblos = ["Arousa", "Noia", "Soutomaior", "Oia", "Corrubedo", "Poio"];

 /* medir el array */
 echo "El tamaño del array es: " .count($pueblos) . "<br>";

 /*eliminar elemento array */
 unset($pueblos[3]);

 $pueblos = array_values($pueblos);

 /*tamaño final del array */

 echo "El tamaño final del erray es: " .count($pueblos) . "<br>";

 foreach ($pueblos as $pueblo){
    echo $pueblo . "<br>";
 }

?>