<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PiramideController extends Controller
{
    public function piramide($ab, $h, $tinta) {
        $retorno  = 'ab: '.$ab.'<br>';
        $retorno .= 'h: '.$h.'<br>';
        
        $al             = sqrt(($h*$h)+($ab*$ab));
        $areaTriangulo  = (($ab*2)*$al)/2;
        $areaBase       = ($ab*2)*($ab*2);
        $areaTotal      = ($areaBase+($areaTriangulo*4));
        
        $litros         = $areaTotal/4.76;
        $latas          = ceil($litros/18);
        $precos = [
            1 => 127.9,
            2 => 258.98,
            3 => 344.34
        ];
        $preco          = $latas*$precos[$tinta];
        $volume         = ($areaBase/3) * $h;

        $retorno .= 'a1: '.$al.'<br>';
        $retorno .= 'Área Triângulo: '.$areaTriangulo.'<br>';
        $retorno .= 'Área Base = '.$areaBase.'<br>';
        $retorno .= 'Área Total = '.$areaTotal.'<br>';
        $retorno .= 'Tipo de Tinta: '.$tinta.'<br>';
        $retorno .= 'Litros = '.$litros.'<br>';
        $retorno .= 'Latas = '.$latas.'<br>';
        $retorno .= 'Preço = '.$preco.'<br>';
        $retorno .= 'Volume = '.$volume.'<br>';

        return $retorno;
    }
}
