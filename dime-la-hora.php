<?php

function obtener_hora() {
    date_default_timezone_set("Europe/Amsterdam");
    return date("h:i a");
}

echo "Hola! Me podrías decir la qué hora es? \n";
echo "Claro! Son las " . obtener_hora();

echo "\n";