<?php 

// Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro.

function imc(float $peso, float $altura): float {
    return $peso / ($altura**2);
}

echo number_format(imc(76, 1.85), 2);

?>