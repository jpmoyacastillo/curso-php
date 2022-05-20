<?php

/* $segundos = readline("Ingresa el tiempo en segundo: ");
$horas = (int) ($segundos / 3600);  // forzar precedencia con parentesis
$segundos = (int) ($segundos % 3600);
$minutos = (int) ($segundos / 60);
$segundos = (int) ($segundos % 60);

echo "Son $horas horas, $minutos minutos y $segundos segundos."; */

$horas = readline("Ingresa el tiempo en horas: ");
$horas = (int) ($horas * 3600);
$minutos = readline("Ingresa el tiempo en minutos: ");
$minutos = (int) ($minutos * 60);
$segundos = readline("Ingresa el tiempo en segundos: ");

// $total_segundos = $horas + $minutos + $segundos;
$segundos += $minutos + $horas;

echo "Son $total_segundos segundos en total.";

echo "\n";