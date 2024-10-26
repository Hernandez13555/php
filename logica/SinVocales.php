<?php

function quitarVocales($palabra) {
    // Eliminar todas las vocales (mayúsculas y minúsculas) usando str_replace
    $palabraSinVocales = str_replace(['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'], '', $palabra);
    return $palabraSinVocales;
}

// Ejemplo de uso
$palabra = "elefante";
echo quitarVocales($palabra);
