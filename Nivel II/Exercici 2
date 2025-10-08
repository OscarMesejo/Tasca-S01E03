<?php

$notas = [

    "Sergi" => [8, 9, 8, 7, 10],
    "Carlos" => [6, 9, 7 , 7, 8],
    "Javier" => [8, 6, 9, 7, 6]
];

function notaMedia($notas){

    $sumaMedias = 0;

    foreach($notas as $nombre => $notasAlumno){
        
        $suma = 0;
        
        foreach($notasAlumno as $nota){
            $suma = $suma + $nota;
        }

        $mediaAlumno = $suma / count($notasAlumno);

        $sumaMedias = $sumaMedias + $mediaAlumno;

        echo $nombre  . "tiene una media de: " . $mediaAlumno . "<br>";
    }
    
       $mediaClase = $sumaMedias / count($notas);
         
        echo "<br>La media de la clase es: " . $mediaClase;
}
notaMedia($notas);

?>