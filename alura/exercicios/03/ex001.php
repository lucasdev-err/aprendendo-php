<?php

class Conta
{
    private int $saldoEmCentavos;
    private string $nomeTitular;
    private string $numeroConta;


    public function __construct(int $saldoEmCentavos, string $nomeTitular, string $numeroConta)
    {
        $this->saldoEmCentavos = $saldoEmCentavos;
        $this->nomeTitular = $nomeTitular;
        $this->numeroConta = $numeroConta;
    }

    public function getConta(): array
    {
        $conta = [
            "Titular" => $this->nomeTitular,
            "Conta" => $this->numeroConta,
            "Saldo" => $this->saldoEmCentavos
        ];
        return $conta;
    }

    public function sacar(int $saque): void
    {
        if ($saque > 0 && $saque <= $this->saldoEmCentavos){
            $this->saldoEmCentavos -= $saque;
        }
    }

    public function depositar(int $deposito): void
    {
        if ($deposito > 0){
            $this->saldoEmCentavos += $deposito;
        }
    }

}


$conta = new Conta(10, "Lucas", "1");
?>