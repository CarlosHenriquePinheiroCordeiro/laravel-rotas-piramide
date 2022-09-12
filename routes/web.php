<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HojeController;
use App\Http\Controllers\PiramideController;
use App\Http\Controllers\ConeController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ContatoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/agenda', AgendaController::class);
Route::resource('/contato', ContatoController::class);

Route::get('/tab/{n}/{i}/{f}', function ($n, $i, $f) {
    $resultado = '';
    for ($x = $i; $x <= $f; $x++) {
        $resultado .= $n.' x '.$x.' = '.$n*$x.'<br>';
    }
    return $resultado;
})->where("n", "[0-9]+")->where("i", "[0-9]+")->where("f", "[0-9]+");


Route::get('/piramide/{ab}/{h}/{tinta}', function($ab, $h, $tinta) {
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
})->where("h", "[0-9]*\.?[0-9]*")->where("ab", "[0-9]*\.?[0-9]*")->where("tinta", "[1-3]");

Route::get('/piramideController/{ab}/{h}/{tinta}', [PiramideController::class, 'piramide'])->where("h", "[0-9]*\.?[0-9]*")->where("ab", "[0-9]*\.?[0-9]*")->where("tinta", "[1-3]");
Route::get('/cone/{z}/{r}/{tinta}', [ConeController::class, 'index'])->where("z", "[0-9]*\.?[0-9]*")->where("r", "[0-9]*\.?[0-9]*")->where("tinta", "[1-3]");
Route::get('/cone/{z}/{r}'        , [ConeController::class, 'index'])->where("z", "[0-9]*\.?[0-9]*")->where("r", "[0-9]*\.?[0-9]*");
Route::get('/cone/{z}'            , [ConeController::class, 'index'])->where("z", "[0-9]*\.?[0-9]*");
Route::get('/cone'                , [ConeController::class, 'index']);

Route::prefix('/app')->group(function(){
    Route::get('/', function () {
        return 'Home - GET';
    });
    
    Route::get('/teste', function () {
        return 'Teste - GET';
    });
    
    Route::post('/', function () {
        return 'Home - POST';
    });
    
    Route::post('/teste', function () {
        return 'Teste - POST';
    });
});

Route::get('/jogadores', function() {
    echo '1 - Neymar<br>';
    echo '2 - Pelé<br>';
    echo '3 - Zico<br>';
});

Route::redirect('players', 'jogadores');

Route::get('/hoje'                          , [HojeController::class, 'teste']);
Route::get('/hoje/{numero}'                 , [HojeController::class, 'teste']);
Route::get('/hoje/{numero}/{inicio}'        , [HojeController::class, 'teste']);
Route::get('/hoje/{numero}/{inicio}/{fim}'  , [HojeController::class, 'teste']);