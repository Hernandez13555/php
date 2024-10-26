<?php

$nombre = "jonh";
$sexo = "M";

function grupo($nombre, $sexo) {
  if($sexo === "f" && strtoupper($nombre) <"M" ||
  $sexo === "M" && strtoupper($nombre) > "N") {
    return "grupo A";
  }else{
    return "grupo B";
  }
}
$grupo = grupo($nombre, $sexo);
echo $grupo;