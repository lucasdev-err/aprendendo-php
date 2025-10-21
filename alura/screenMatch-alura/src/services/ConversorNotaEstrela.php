<?php
namespace ScreenMatch\services;

use DivisionByZeroError;
use ScreenMatch\models\Avaliavel;

class ConversorNotaEstrela
{
    public function converte(Avaliavel $avaliavel): float
    {
        try {
            $nota = $avaliavel->media();

            return round($nota) / 2;
        } catch (DivisionByZeroError $erro){
            echo $erro->getMessage() . PHP_EOL;
            return 0;
        }
    }
}