<?php

$tienda_de_cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Recalentado" => 10,
    "Cappuccino" => 27.5,
    "Mocca" => 24,
);

// foreach ($tienda_de_cafes as $cafe => $price) {
//     echo "Actualmente encontré al café $cafe \n";
    
//     if($cafe == "Latte"){
//         echo "Encontré el latte!";
//         break;
//     }
// }

foreach ($tienda_de_cafes as $cafe => $price) {
    
    if ($cafe == "Recalentado") 
        continue;
    

    echo "El café $cafe es muy rico! \n";
}

echo "\n";