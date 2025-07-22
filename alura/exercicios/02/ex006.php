<?php

// Escreva uma funçao em PHP que receba um array de strings por parâmetro e o retorne ordenado em ordem alfabética.
function alfabetica(array $arr): array {
    sort($arr);
    return($arr);
}

$array = [
    "Bola",
    "Seila",
    "Andre",
    "Lucas"
];

$arrayOrdenado = alfabetica($array);

var_dump($arrayOrdenado);

?>