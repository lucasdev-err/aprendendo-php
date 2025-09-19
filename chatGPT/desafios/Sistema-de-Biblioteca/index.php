<?php 

require_once(__DIR__ . "/src/models/Livro.php");
require_once(__DIR__ . "/src/models/Usuario.php");
require_once(__DIR__ . "/src/models/Biblioteca.php");

$livro1 = new Livro("A volta dos que nao foram", "Lucas foda", 2025);
$livro2 = new Livro("A ida dos que nao vieram", "Lucas foda", 2026);

$usuario1 = new Usuario("Lucas", "teste@gmail.com");
$usuario2 = new Usuario("Lucas2", "teste2@gmail.com");

$biblioteca = new Biblioteca();

$biblioteca->registrarLivro($livro1);
$biblioteca->registrarLivro($livro2);
// var_dump($biblioteca->getCatalogo());
var_dump($biblioteca->getCatalogo());



$biblioteca->registrarUsuario($usuario1);
$biblioteca->registrarUsuario($usuario2);

var_dump($biblioteca->getUsuarios());


$biblioteca->emprestar("L1", "U1");

var_dump($biblioteca->getCatalogo());
var_dump($biblioteca->getUsuarios());

$biblioteca->emprestar("L2", "U1");

var_dump($biblioteca->getCatalogo());
var_dump($biblioteca->getUsuarios());

?>