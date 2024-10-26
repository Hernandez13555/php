<?php

$precio = 100;

function calcularPrecioConDescuento($precio) {
    $descuento = $precio * 0.1; 
    $precioFinal = $precio - $descuento; 
    
    return array('descuento' => $descuento, 'precio_final' => $precioFinal);
}

$precioOriginal = 100; 
$resultado = calcularPrecioConDescuento($precioOriginal);

echo "Precio original: $" . $precioOriginal . "<br>";
echo "Descuento: $" . $resultado['descuento'] . "<br>";
echo "Precio final con descuento: $" . $resultado['precio_final'];

