<!-- Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não. -->

<!-- Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado. -->

<?php 

$notas = [10, 2, 4, 6, 8, 9, 2, 10];

// SOLUCAO UTILIZANDO for

// for ($i = 0 ; $i < count($notas); $i++){
//     if ($notas[$i] >= 6){
//         echo "Parabens, aprovado com $notas[$i] pontos\n";
//     } else {
//         echo "Infelizmente, $notas[$i] pontos nao aprova\n";
//     }
// }


// SOLUCAO UTILIZANDO foreach

foreach ($notas as $nota) {
    if ($nota >= 6){
        echo "Voce foi aprovado com {$nota} pontos.\n";
    } else{
        echo "Voce reprovou com {$nota} pontos.\n";
    }
}


?>
