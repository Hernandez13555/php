<?php

// $tabla = 7;
// $a = 2;
// while($a <= 10) {
//   $a++;

//   if($tabla % $a == 0){
//     $a++;
//   }else{
//     break;
//   }
//   if($a == 8) continue;

//   echo "$tabla x $a = " . $tabla * $a . "<br>";
// }

function esPrimo($numero) {
  $a = 2;
  while($a <= $numero) {
    if($numero % $a == 0) {

    }
    $a++; 
  }
  return true;
}

$primo = esPrimo(27) ? "Si": "No";

echo $primo;