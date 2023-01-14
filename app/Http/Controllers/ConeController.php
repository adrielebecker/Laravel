<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConeController extends Controller
{
    public function coneA($r=6, $h=8, $tipo=1){
        $geratriz = sqrt($r*$r + $h*$h);
        $fundo = 3.14 * pow($r, 2);
        $lateral = 3.14 * $r;
        $latFund = 3.14 * $r * ($r + $geratriz);
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
    }
}

