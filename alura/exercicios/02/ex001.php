<?php 

// Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação.

function calc(int $n1, int $n2, string $opr): int|float|string {
    switch ($opr) {
        case '+':
            return $n1 + $n2;
            break;

        case '-':
            return $n1 - $n2;
            break;
        
        case '*':
            return $n1 * $n2;
            break;
        case '/':
            if ($n2 == 0){
                return "Error: divisao por zero";
            }else{
                return $n1 / $n2;
            }
            break;
        
        default:
            return "Error: operador invalido";
            break;
    }
}

echo calc(1, 0, "a");

?>