<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabuadaController extends Controller
{
    public function tab($valor=2, $inicio=0, $fim=10){
        for($x = $inicio; $x <= $fim; $x++)
            echo "{$valor} X {$x} = ".($valor*$x)."</br>";
    }
}
