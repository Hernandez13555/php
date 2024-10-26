<?php

$palabra = "lobo";

function CantSilabas($palabra) {
    $numSilabas = preg_match_all('/[aeiouáéíóúü]+/u', $palabra);
    return $numSilabas;
}

echo CantSilabas($palabra);