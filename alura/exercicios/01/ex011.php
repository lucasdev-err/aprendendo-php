<!-- 3 - Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela. -->

<?php 

$conta = [
    "titular" => "Lucas",
    "saldo" => 10000000.00
];

echo "{$conta['titular']} possui {$conta['saldo']} reais de saldo.";

?>