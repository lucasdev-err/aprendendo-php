<!-- Desenvolva um programa que exiba na tela uma saudação (bom dia, boa tarde ou boa noite) dependendo do horário encontrado em uma variável (inteiro representando as horas). -->


<?php 
date_default_timezone_set("America/Sao_paulo");
$hora = date("H");

echo "$hora horas\n";

if ($hora >= 6 && $hora < 12){
    echo "Bom dia!";
} elseif ($hora >= 12 && $hora < 18) {
    echo "Boa tarde!";
} elseif ($hora >= 18 && $hora < 24) {
    echo "Boa noite!";
} else {
    echo "Boa madrugada";
}

?>