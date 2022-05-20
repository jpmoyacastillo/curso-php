<?php

$michis_felinos = true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_programan_PHP = false;

// And
var_dump($michis_felinos && $michis_4_patas);

// Or
var_dump($michis_felinos || $michis_vuelan);

// Not
var_dump(!$michis_4_patas);

// diferencia en || y and
$resultado = $michis_4_patas and $michis_programan_PHP;

var_dump($resultado);

echo "\n";