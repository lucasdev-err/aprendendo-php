<!-- Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC. -->

<?php 

$peso = $argv[1];
$altura = $argv[2];

$imc = $peso / ($altura**2);

if ($imc < 18.5){
    echo "Abaixo do peso\n";
} elseif ($imc < 24.9) {
    echo "Peso normal\n";
} elseif ($imc < 29.9) {
    echo "Sobrepeso\n";
} elseif ($imc < 34.9) {
    echo "Obesidade I\n";
} elseif ($imc < 39.9) {
    echo "Obesidade II\n";
} else {
    echo "Obesidade III\n";
}

echo number_format($imc, 2, ",", ".") . " Kg/m²";

?>
