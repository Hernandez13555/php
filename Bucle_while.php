<?php

$tabla = 7;
$a = 2;

while($a <= 10) {
  $a++;

  if($tabla % $a == 0){
    $a++;
  }

  if($a == 8){
    break;
  }

  echo "$tabla x $a = " . $tabla * $a . "<br>";
}
