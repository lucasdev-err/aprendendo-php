<?php 

// Crie uma função em PHP que converta graus celsius para Fahrenheit.

function celciusToFahrenheit(float $celsius,): float {
    return ($celsius * (9/5)) + 32;
}

echo number_format(celciusToFahrenheit(22), 1);

?>