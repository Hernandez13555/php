<?php

$numero = 8;

function tablaMultiplicar($numero) {
    echo "Tabla de multiplicar del " . $numero . "<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
    }
}

tablaMultiplicar($numero);