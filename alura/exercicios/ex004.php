<!-- 4 - Desenvolva um programa em PHP que verifique se um ano é bissexto ou não. -->

<?php 

$ano = $argv[1];

if ($ano%4 == 0 && $ano%100 != 0|| $ano%400 == 0){
    echo "Bisexto";
} else{
    echo "normal";
}

?>