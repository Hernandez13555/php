<?php
$a = 25;
$b = 5;

function calculadora($a, $b){
  try{
    //dividir
    if($b == 0){
      throw new Exception("Division por cero");
    }
    $resultado = array(
    "suma" => "suma",
    "resta" => "resta",
    "multiplicacion" => "multiplicacion",
    "division" => "division",
    );
    return $resultado;
  
  }catch(\Exception $e) {
    return $e->getMessage();
  }
}

$resultado = calculadora($a, $b);

echo "<pre>";
print_r($resultado);
echo "</pre>";
