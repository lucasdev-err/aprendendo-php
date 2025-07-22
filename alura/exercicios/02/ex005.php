<?php

//Crie um programa em PHP que transforme a string "Vinicius Dias, 1997, Programador" em um array em que cada item esta separa por virgulas.

$entrada = "Lucas Emanuel, 2005, Programador";
$saida = explode(", ", $entrada);

var_dump($saida);

?>