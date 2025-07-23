<?php 

// Crie um programa que converta a string '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}' em um objeto.
$string = '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}';
$objeto = json_decode($string);

var_dump($objeto);

?>