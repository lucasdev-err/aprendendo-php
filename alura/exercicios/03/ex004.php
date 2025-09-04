<?php 

/* 
Crie uma classe ContaBancaria com métodos para realizar operações bancárias como depositar(), sacar() e consultarSaldo(). Em seguida, crie uma subclasse ContaCorrente que herda da classe ContaBancaria. Adicione um método específico para a subclasse, como cobrarTarifaMensal(), que desconta uma tarifa mensal da conta corrente.

Além disso, no método sacar() da ContaCorrente, cobre uma taxa de saque também. Armazene essa taxa como uma constante da classe. 
*/

class ContaBancaria 
{
    protected int $saldo = 0;

    public function sacar(int $valorSaque): void {
        if($valorSaque > 0 && $this->saldo >= $valorSaque){
            $this->saldo -= $valorSaque;
        }
    }

    public function depositar(int $valorDeposito): void {
        if($valorDeposito > 0){
            $this->saldo += $valorDeposito;
        }
    }

    public function consultarSado(): int {
        return $this->saldo;
    }
}

class ContaCorrente extends ContaBancaria
{
    private const TAXA_SAQUE = 0.005;

    private const TARIFA_MENSAL = 5_00;

    public function cobrarTarifaMensal(): void {
        $this->saldo -= self::TARIFA_MENSAL;
    }

    public function sacar($valorSaque): void {
        $saqueTotal = $valorSaque + ($valorSaque * self::TAXA_SAQUE);
        if($saqueTotal > 0 && $this->saldo >= $saqueTotal){
            $this->saldo -= $saqueTotal;
        }
    }
}

$conta1 = new ContaBancaria();

$conta1->depositar(1000_00);
echo $conta1->consultarSado() . PHP_EOL;
$conta1->sacar(10_00);
echo $conta1->consultarSado() . PHP_EOL;

$conta2 = new ContaCorrente();

$conta2->depositar(1000_00);
echo $conta2->consultarSado() . PHP_EOL;
$conta2->sacar(10_00);
echo $conta2->consultarSado() . PHP_EOL;
?>