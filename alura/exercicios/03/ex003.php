<?php 
require __DIR__ . "/ex002.php";
// Crie uma classe que represente uma conta com as propriedades saldo, nome do titular e tipo. Use os tipos e formas de acesso adequadas.

class Conta 
{
    private int $saldoEmCentavos;

    public function __construct(
        public readonly string $titular,
        public readonly TipoConta $tipo
    ){
        $this->saldoEmCentavos = 0;
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
?>