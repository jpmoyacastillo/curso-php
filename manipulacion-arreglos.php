<?php

$edades = array(18,22,40, 34);

//count 
// echo count($edades) . "\n";

//array_push
// array_push($edades, 50);

//is array
$esto_no_es_un_arreglo = "";

/* var_dump(is_array($esto_no_es_un_arreglo));
var_dump(is_array($edades)); */

// explode
/* $lista_de_frutas = "Manzana,Pera,Naranja,Manzana";
$lista_de_frutas_array = explode(",", $lista_de_frutas); */

// implode
$lista_de_frutas_array = array("Manzana", "Pera", "Naranja", "Manzana");
$lista_de_frutas = implode(",", $lista_de_frutas_array);

var_dump($lista_de_frutas);