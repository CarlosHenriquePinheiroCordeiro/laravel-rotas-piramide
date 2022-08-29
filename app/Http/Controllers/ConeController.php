<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConeController extends Controller
{
    public function index($z=8, $r=6, $tinta=1) {
        $this->cone($z, $r, $tinta);
    }

    public function cone($z, $r, $tinta) {
        $g = sqrt(($z*$z)+($r*$r));
        $retorno  = '- Cone<br>';
        $retorno .= 'Raio: '.$r.'<br>';
        $retorno .= 'Altura: '.$z.'<br>';
        $retorno .= 'Nível: '.$tinta.'<br>';

        $retorno .= '<hr>';
        $retorno .= 'Geratriz: '.$g.'<br>';
        $retorno .= '<hr>';

        $areaFundo = (3.14*($r*$r));
        $retorno .= 'Área do Fundo: '.$areaFundo.'<br>';
        $areaTotal = (3.14*$r*($r+$g));
        $areaLateral = $areaTotal - $areaFundo;
        $retorno .= 'Área Lateral do Cone: '.$areaLateral.'<br>';
        $retorno .= 'Área Total: '.$areaTotal.'<br>';

        $retorno .= '<hr>';
        $litros = $areaTotal*3.45;
        $retorno .= 'Litros: '.$litros.'<br>';
        $latas = ceil($litros/18);
        $retorno .= 'Latas: '.$latas.'<br>';
        $retorno .= '<hr>';

        $precos = [
            1 => 238.90,
            2 => 467.98,
            3 => 758.34
        ];
        $retorno .= 'Preço Total: '.$latas*$precos[$tinta].'<br>';
        echo $retorno;
    }


}
