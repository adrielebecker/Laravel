<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;//criou uma requisição na pasta http

class TesteController extends Controller //herança, Teste elemento filho e controller elemento pai
{
    public function index(){
        return "TesteController::index";
    }
}
