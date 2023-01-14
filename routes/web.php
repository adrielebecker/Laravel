<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\TabuadaController;
use App\Http\Controllers\ConeController;
use App\Http\Controllers\PiramideController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\JogadoresController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/piramide/{ab}/{h}/{tipo}', function($ab,$h,$tipo){
    $al = sqrt(($ab*$ab)+($h*$h));//pega a raiz 
    $cd = $ab*2;
    $areatriangulo = ($cd*$al)/2; //eleva/potencia
    $areabase = pow($cd,2);
    $areatotal = $areatriangulo * 4 + $areabase;
    $litros = $areatotal / 4.76;
    $latas = ceil($litros/18);//arredonda
    $preco = 0;

    if($tipo == 1){
        $preco = $latas * 127.90;
    }
    elseif($tipo == 2){
        $preco = $latas*258.98;
    }
    else{
        $preco = $latas*344.34;
    }

    $volume = ($areabase*$h)/3;

    echo "ab: ".$ab."<br>".
          "h: ".$h."<br>".
          "al: ".$al."<br>".
          "Área Triângulo: ".$areatriangulo."<br>".
          "Área Base: ".$areabase."<br>".
          "Área Total: ".$areatotal."<br>".
          "Tipo de Tinta: ".$tipo."<br>".
          "Litros: ".$litros."<br>".
          "Latas: ".$latas."<br>". 
          "Preço: ".$preco."<br>".
          "Volume: ".$volume."<br>";
}
);

Route::get('/cone/{r}/{h}/{tipo}', function($r,$h,$tipo){
    $geratriz = sqrt($r*$r + $h*$h);
    $fundo = 3.14 * pow($r, 2);
    $lateral = 3.14 * $r;
    $latFund = 3.14 * $r ($r + $geratriz);
    $litros = $latFund / 3.45;
    $latas = ceil($litros/18);

    if($tipo == 1){
        $preco = $latas * 238.90;
    }
    elseif($tipo == 2){
        $preco = $latas*467.98;
    }
    else{
        $preco = $latas*758.34;
    }

    echo "Raio: ".$r."<br>
        Altura: ".$h."<br>
        Nível: ".$tipo."<br>
        Geratriz: ".$geratriz."<br>
        Área do Fundo: ".$fundo."<br>
        Área Lateral do Cone: ".$lateral."<br>
        Área Total: ".$latFund."<br>
        Litros: ".$litros."<br>
        Latas: ".$latas."<br>
        Preço Total: ".$preco;
});

Route::get('/teste', [TesteController::class, 'index']);
Route::get('/tab/{valor?}/{inicio?}/{fim?}', [TabuadaController::class, 'tab']);
Route::get('/coneA/{r?}/{h?}/{tipo?}', [ConeController::class, 'coneA']);
// Route::get('/piramideA/{ab?}/{h?}/{tipo?}', [PiramideController::class, 'piramideA']);
Route::resource('agenda',AgendaController::class);
Route::resource('jogadores', JogadoresController::class);
// classe vc pega os codigos e a main vc apresenta ao usuario consegue reaproveitar codigo;
// funcoes são metodos e atributos as variaveis