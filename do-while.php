<?php
$usernames = ["admin", "user", "guest"];

do{
    // echo "Esto se ejecuta por lo menos una vez";
    $username = readline("Por favor, ingresa tu nuevo nombre de usuario: ");
    echo "\n";
} while(in_array($username, $usernames));

echo "\n";