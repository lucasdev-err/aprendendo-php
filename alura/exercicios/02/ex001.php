<?php 

// Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação.

function calc(int $n1, int $n2, string $opr): int|float|string {
    if($opr === '/' && $n2 == 0){
        return "Error: divisao por zero";
    }
    return match($opr){
        "+" => $n1 + $n2,
        '-' => $n1 - $n2,
        '*' => $n1 * $n2,
        '/' => $n1 / $n2,
        default => "Error: perador invalido"
    };
}

echo calc(1, 2, "+");

?>