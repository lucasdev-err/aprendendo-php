<?php 
echo "Bem-vindo(a) ao Screen Match!\n";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = $argv[1] ?? 2022;


$somaDeNotas = 9.9;
$somaDeNotas += 10;
$somaDeNotas += 7.5;
$somaDeNotas += 2.1;
$somaDeNotas += 10;

$notaFilme = $somaDeNotas / 5;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do filme: $nomeFilme
Ano Lancamento: $anoLancamento
Nota do filme: $notaFilme
Esta incluso no plano: $incluidoNoPlano";

?>