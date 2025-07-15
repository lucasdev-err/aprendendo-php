<!-- 5 - Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit. -->


<?php 

$celsius = $argv[1];
$fahrenheit = ($celsius * (9/5)) + 32;

echo "$celsius graus celsius sao $fahrenheit graus fahrenheit.";

?>