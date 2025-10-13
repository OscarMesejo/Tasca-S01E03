<?php

function allContainChar($words, $char) {

    foreach ($words as $word) {
        /*strpos busca posición de un carácterer, si lo encuentra devuelve posición, si no devuelve false */
        /* strtolower($word) convierte la palabra en minúscula */
        if (strpos(strtolower($word), strtolower($char)) === false) {
            return false;
        }
    }
    return true;
}

/* Ejemplos de uso */

$palabras = ["hola", "Php", "Html"];

echo allContainChar($palabras, "h") ? "true" : "false"; // true
echo "<br>";
echo allContainChar($palabras, "l") ? "true" : "false"; // false
?>
