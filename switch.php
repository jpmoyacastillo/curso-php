<?php

//Michi 1: 9
//Michi 2: 10
//Michi 3: 8
//Michi 4: 9
//Michi 5: 1

$michi = 6;

switch ($michi) {
    case 1:
        // break;
    case 4:
        echo "Su número favorito es el 9";
        break;
    case 2:
        echo "Su número favorito es el 10";
        break;
    case 3:
        echo "Su número favorito es el 8";
        break;
    case 5:
        echo "Su número favorito es el 1";
        break;
    
    default:
        echo "Ese michi no existe 🙃";
        break;
}

echo "\n";