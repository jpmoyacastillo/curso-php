<?php

// 2 -> 1
// 3 -> 2
// 4 -> 3
// 5 -> 5
// 6 -> 8
// 7 -> 13
// 8 -> 21

$numero_de_tienda = (int) readline("Dime el número de tienda: ");
$anterior = 0;
$actual = 1;

for ($i=2; $i <= $numero_de_tienda; $i++) { 
    $temportal = $actual;

    // $actual = $actual + $anterior;
    $actual += $anterior;

    $anterior = $temportal;

    // echo $actual . "\n";
}

echo "Hay $actual formas distintas de llegar";

echo "\n";