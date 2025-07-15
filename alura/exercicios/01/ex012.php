<!-- 4 - Crie um array contendo nomes de familiares seus e após sua criação adicione mais elementos ao array. -->

<?php 

$nomes = ["Lucas", "Maria", "Sandro", "Nilian"];

// $nomes[] = "Judith"; // --> Esse metodo e mais pratico porem adiciona apenas 1 item no fim da lista.

array_push($nomes, "Judith", "Alvaro");

var_dump($nomes);

?>
