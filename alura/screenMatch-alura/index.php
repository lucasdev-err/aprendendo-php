<?php 
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

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do filme: $nomeFilme
Ano Lancamento: $anoLancamento
Nota do filme: $notaFilme
Esta incluso no plano: $incluidoNoPlano\n";

if ($anoLancamento > 2023) {
    echo "Esse filme e um lancamento\n";
} elseif($anoLancamento > 2020 && $anoLancamento <= 2023) {
    echo "Esse filme ainda e novo\n";
} else {
    echo "Esse filme nao e um lancamento\n";
}

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

echo $filme["nome"];

?>