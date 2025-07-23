<?php 

// Escreva um programa em PHP que abra o arquivo teste.txt, acrescente a frase "PHP é incrível!" no final do arquivo e depois o feche.

$caminhoArquivo = __DIR__ . '/teste.txt';

$arquivo = fopen($caminhoArquivo, 'a');
fwrite($arquivo, "\nPHP é incrível!");
fclose($arquivo);

echo file_get_contents($caminhoArquivo);

?>