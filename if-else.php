<?php

$asientos_disponibles = 0;
$es_hijo_de_tom_holland = false;
$conoce_a_tony_stark = true;

/* if ($asientos_disponibles > 0) {
    echo "Puedes ver la película de Spiderman";
} else {
    echo "Lo siento, te tocará spoilearte";
} */

// si solo tenemos una condición, podemos escribir sin llaves
if ($asientos_disponibles > 0) 
    echo "Puedes ver la película de Spiderman";
elseif ($es_hijo_de_tom_holland)
    echo "No te creo, pero puedes ver la película de Spiderman";
elseif ($conoce_a_tony_stark)
    echo "Bueno, te creo, adelante!";
else 
    echo "Lo siento, te tocará spoilearte";


echo "\n";