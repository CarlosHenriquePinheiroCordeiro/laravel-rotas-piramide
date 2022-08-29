<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HojeController extends Controller
{
    public function teste($n=2, $i = 0, $f = 10) {
        $resultado = '';
        for ($x = $i; $x <= $f; $x++) {
            $resultado .= $n.' x '.$x.' = '.$n*$x.'<br>';
        }
        echo $resultado;
    }


}
