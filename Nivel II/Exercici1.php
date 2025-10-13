<?php

$lista1 = ["Sergi", "Javier", "Leo", "Jez", "Alba"];
$lista2 = ["Carlos", "Elda", "Sergi", "Alba", "Sara"];

/* Lista con invitados en común */

$listaComun = array_intersect($lista1, $lista2);

    print_r($listaComun);

/*Lista común sin repeticiones */

$listaSinRepetidos = array_unique(array_merge($lista1, $lista2));
print_r(array_merge($lista1, $lista2));

?>