<?php 

declare(strict_types=1);

function pesquisaBinaria(array $lista, int $item)
{
    $baixo = $lista[0];
    $alto = count($lista) - 1;
    
    while ($baixo <= $alto) {
        $meio = round(($alto + $baixo) / 2);
        $chute = $lista[$meio];

        if ($chute < $item){
            $baixo = $meio + 1;
        }
        if ($chute > $item){
            $alto = $meio - 1;
        }
        else {
            return $meio;
        }
        
    }
    return null;
}

$minhaLista = [1, 3, 5, 7, 9];

var_dump(pesquisaBinaria($minhaLista, 3));
var_dump(pesquisaBinaria($minhaLista, -1));


?>