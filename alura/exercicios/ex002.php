2 - Crie um programa em PHP que calcule a média de três notas e exiba o resultado.

<?php 


$somanotas = $argv[1];
$somanotas += $argv[2];
$somanotas += $argv[3];

$media = $somanotas / 3;

echo "A media entre $argv[1], $argv[2] e $argv[3] e: $media";

?>