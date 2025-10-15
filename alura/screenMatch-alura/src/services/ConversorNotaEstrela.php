<?php
namespace ScreenMatch\services;

use ScreenMatch\models\Avaliavel;

class ConversorNotaEstrela
{
    public function converte(Avaliavel $avaliavel): float
    {
        $nota = $avaliavel->media();

        return round($nota) / 2;
    }
}