<?php 

// Escreva um programa em PHP que abra um arquivo chamado teste.txt para ler a primeira linha e depois o fecha.

$caminhoArquivo = __DIR__ . '/teste.txt';

$arquivo = fopen($caminhoArquivo, 'r');
$primeiraLinha = fgets($arquivo);
fclose($arquivo);

echo $primeiraLinha;

?>