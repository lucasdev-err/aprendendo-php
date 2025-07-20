<?php 

require __DIR__ . "/functions.php";

echo "Bem-vindo(a) ao Screen Match!\n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($i = 1; $i <= $quantidadeDeNotas; $i++) { 
    $notas[] = (float) $argv[$i];
}


/* 
$contador = 1;
while ($argv[$contador] != 0) {
    $somaDeNotas += $argv[$contador++];
}
*/

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: $nomeFilme
Ano Lancamento: $anoLancamento
Nota do filme: $notaFilme\n";

exibeMensagemLancamento($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "acao",
    "Thor: Ragnarok" => "super-heroi",
    "Se beber nao case" => "comedia",
    default => "desconhecido"
};

echo "O genero do filme e $genero\n";

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-heroi"
];

echo $filme["ano"];

var_dump($notas);
sort($notas);
var_dump($notas);
$menorNota = min($notas);
var_dump($menorNota);

var_dump($filme['nome']);
$posicaoDoisPontos = strpos($filme['nome'], ":");
var_dump($posicaoDoisPontos);

var_dump(substr($filme['nome'], 0, $posicaoDoisPontos));

?>