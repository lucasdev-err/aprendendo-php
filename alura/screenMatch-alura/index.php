<?php 

require __DIR__ . "/src/models/Genero.php";
require __DIR__ . "/src/models/Titulo.php";
require __DIR__ . "/src/models/Filme.php";
require __DIR__ . "/src/models/Serie.php";

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    'Thor - Ragnarok',
    2021,
    Genero::SuperHeroi,
    180,
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento . PHP_EOL;

$serie = new Serie("Lost", 2007, Genero::Drama, 10, 20, 50);

echo $serie->anoLancamento . PHP_EOL;

$serie->avalia(10);

echo $serie->media() . PHP_EOL;

?>