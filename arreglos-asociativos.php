<?php

/* $edades = array(
    "Juan" => 20,
    "Pedro" => 30,
    "Ana" => 40,
    "Maria" => 50
);

echo "La edad de Juan es: " . $edades["Juan"] . "\n"; */

/* $cafes = array(
    "Capuccino" => 50,
    "Latte" => 40,
    "Mocha" => 30,
);

echo "El precio del cafe Latte es: " . $cafes["Latte"] . "\n"; */

$personas = array(
    "JP" => array(
        "edad" => 30,
        "apellido" => "Moya",
    ),
    "Dome" => array(
        "edad" => 29,
        "apellido" => "Gandini",
    ),
);

echo "La información de JP es: Edad:" . $personas["JP"]["edad"]
 . " Apellido: " . $personas["JP"]["apellido"] . "\n";