<?php

$escuela = array(
    array(
        "nombre" => "Michi",
        "ocupación" => "Astronauta",
        "color" => "rojo",
        "comidas" => array(
            "favoritas" => array(
                "comida1" => "Pizza",
                "comida2" => "Hamburguesa",
                "comida3" => "Ensalada"
            ),
            "no favoritas" => array(
                "comida1" => "Lentejas",
                "comida2" => "Porotos",
                "comida3" => "Garbanzos"
            )
        )
    ),
    array(
        "nombre" => "Michi2",
        "ocupación" => "Filósofo",
        "color" => "amarillo",
        "comidas" => array(
            "favoritas" => array(
                "comida1" => "Pizza",
                "comida2" => "Hamburguesa",
                "comida3" => "Ensalada"
            ),
            "no favoritas" => array(
                "comida1" => "Lentejas",
                "comida2" => "Porotos",
                "comida3" => "Garbanzos"
            )
        )
    ),
    array(
        "nombre" => "Michi3",
        "ocupación" => "Actor",
        "color" => "azul",
        "comidas" => array(
            "favoritas" => array(
                "comida1" => "Pizza",
                "comida2" => "Hamburguesa",
                "comida3" => "Ensalada"
            ),
            "no favoritas" => array(
                "comida1" => "Lentejas",
                "comida2" => "Porotos",
                "comida3" => "Garbanzos"
            )
        )
    ),
);

$michi1 = $escuela[0];

echo "Una de las comidas favoritas de Michi1 es " .
$michi1['comidas']['favoritas']['comida1'];

echo "\n";