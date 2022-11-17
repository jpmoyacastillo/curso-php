<?php

// function es_estudiante_legend($platzi_rank) {

//     if($platzi_rank >= 2000) {
//         echo "Eres un estudiante Legend!\n";
//     }
//     else {
//         echo "Lo sentimos, aun no alcanzas el nivel legend\n";
//     }
// }

// do {
//     $platzi_rank_user = (int) readline("Por favor, nos podría decir tu Platzi Rank: ");
    
//     es_estudiante_legend($platzi_rank_user);

// } while(true);

// echo "\n";

function buscar_dia($dia_buscado){

    //Convertimos a minúsculas
    $dia_buscado = strtolower($dia_buscado);
    // Primer letra en mayuscula para que coincida con array
    $dia_buscado = ucfirst($dia_buscado);

    $dias = array(
        "Lunes" => "Monday",   
        "Martes" => "Tuesday",
        "Miercoles" => "Wednesday",
        "Jueves" => "Thursday",
        "Viernes" => "Friday",
        "Sabado" => "Saturday",
        "Domingo" => "Sunday"
    );
    
    // recorremos el array 
    foreach($dias as $español => $ingles){
        if($dia_buscado === $español){
            echo "\n\t El día $dia_buscado se escribe en inglés $ingles\n";
            break;
        }
    }

    return $dia_buscado;

}

$dia_buscado = readline("\nEscribe el día de la semana que quieras saber como se escribe en inglés: ");

buscar_dia($dia_buscado);