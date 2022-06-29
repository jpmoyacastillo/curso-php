<?php

$tienda_de_cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Cappuccino" => 27.5,
    "Mocca" => 24,
);

// foreach ($tienda_de_cafes as $price) {
//     echo "El café en cuestión cuesta $$price USD \n";
// }

foreach ($tienda_de_cafes as $cafe => $price) 
    echo "El café $cafe cuesta $$price USD \n";


echo "\n";