<!--

**********
Titular: Nome
Saldo atual: Saldo
**********

1. Consultar saldo atual
2. Sacar valor
3. Depositar valor
4. Sair


-->


<?php 

$contaBancaria = ["titular" => "Lucas", "saldo" => 2000];
$opcao = 0;

while ($opcao != 4){
    echo "1. Consultar saldo atual
2. Sacar valor
3. Depositar valor
4. Sair\n";

    $opcao = fgets(STDIN);
    switch ($opcao) {
        case 1: // Exibir dados bancarios
            echo "**********\n";
            echo "Titular: {$contaBancaria['titular']}\n";
            echo "Saldo atual:R$ {$contaBancaria['saldo']}\n";
            echo "**********\n";
            break;
        
        case 2: // Saque
            echo "Qual valor deseja sacar?\n";
            $saque = fgets(STDIN);
            if ($saque <= $contaBancaria['saldo']){
                $contaBancaria['saldo'] -= $saque;
            } else {
                echo "Saldo insuficiente\n";
            }
            break;
        
        case 3: // Deposito
            echo "Qual valor deseja depositar?";
            $deposito = fgets(STDIN);
            if ($deposito > 0){
                $contaBancaria['saldo'] += $deposito;
            } else {
                echo "Valor invalido, tente novamente!\n";
            }
            break;

        case 4: // Encerramento de loop
            echo "Adeus";
            break;

        default:
            echo "Entrada incorreta, tente novamente.\n";
            break;
    }
}

?>