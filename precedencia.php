<?php

/* contador = 1;
$resultado = $contador++;

echo $resultado; */

// Tiene asociatividad de izq
// echo 1 - 2 - 3 - 4 - 5; resta 1 -2 luego -3 luego -4 luego -5
// echo "\n";

// Tiene asociatividad de der
// $c = 10;
// $a = $b = $c; // 10
// echo $a;

$michis_felinos = true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_programan_PHP = false;

$resultado = $michis_4_patas and $michis_programan_PHP; // true
$resultado = ($michis_4_patas and $michis_programan_PHP); // false

var_dump($resultado);

echo "\n";