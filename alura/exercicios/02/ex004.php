<?php 

// Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.

$notas = [10, 2, 5, 3, 2, 8, 10];

rsort($notas);

echo "As 3 maiores notas são: $notas[0], $notas[1] e $notas[2]\n";

?>