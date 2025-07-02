<!--Escreva um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100. -->

<?php
echo "Exibindo numeros impares entre 0 e 100...\n";
for ($i=0; $i <= 100; $i++) { 
    if ($i % 2 !== 0){
        echo "$i\n";
    }
}


?>
