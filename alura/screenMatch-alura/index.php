<?php

require 'autoload.php';

use ScreenMatch\models\{
    Filme, Episodio, Serie, Genero
};

use ScreenMatch\services\{
    CalculadoraDeMaratona, ConversorNotaEstrela
};

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

$serie = new Serie("Lost", 2007, Genero::Drama, 10, 20, 30);
$episodio = new Episodio($serie, "Episodio Piloto", 1);

echo $serie->anoLancamento . PHP_EOL;

$serie->avalia(10);

echo $serie->media() . PHP_EOL;


$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);

$duracao = $calculadora->duracao();

echo "Para essa maratona, voce vai precisar de $duracao minutos\n";

$conversor = new ConversorNotaEstrela();
echo $conversor->converte($serie) . PHP_EOL;
echo $conversor->converte($filme) . PHP_EOL;

?>