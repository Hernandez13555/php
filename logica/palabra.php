<?php

$palabra = "luna";

function esCortaOLarga($palabra) {
    if (strlen($palabra) < 5) {
        return "La palabra '$palabra' es corta.";
    } else {
        return "La palabra '$palabra' es larga.";
    }
}

echo esCortaOLarga($palabra);