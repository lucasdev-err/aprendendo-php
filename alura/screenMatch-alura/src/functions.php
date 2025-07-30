<?php 

function exibeMensagemLancamento(int $ano): void {
if ($ano > 2023) {
    echo "Esse filme e um lancamento\n";
    } elseif($ano > 2020 && $ano <= 2023) {
        echo "Esse filme ainda e novo\n";
    } else {
        echo "Esse filme nao e um lancamento\n";
    }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento < 2020;
}

function criaFilme(string $nome, int $anoLancamento, float $nota, string $genero): Filme
{
    $filme = new Filme();
    $filme->nome = $nome;
    $filme->anoLancamento = $anoLancamento;
    $filme->genero = $genero;
    $filme->nota = $nota;

    return $filme;
}

?>