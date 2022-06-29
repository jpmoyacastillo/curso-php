<?php

$donaciones_acumulada = readline("Ingrese el monto de donaciones acumuladas: ");

if ($donaciones_acumulada >= 100) {
    echo "Puede retirar su dinero\n";
} else {
    echo "Debe juntar 100 dólares para retirar su dinero. Al momento tiene $donaciones_acumulada dólares acumulados\n";
}


// echo "Donaciones acumuladas: $donaciones_acumulada dólares\n";