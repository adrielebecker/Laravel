<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PiramideController extends Controller
{
    public function piramideA($ab,$h,$tipo){
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
}
