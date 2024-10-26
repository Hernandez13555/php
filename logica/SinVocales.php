<?php

$palabra = "tomate";

function quitarVocales($palabra) {
    $palabraSinVocales = str_replace(['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'], '', $palabra);
    return $palabraSinVocales;
}

echo quitarVocales($palabra);