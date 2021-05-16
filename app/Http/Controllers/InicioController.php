<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $peticion){
        $arreglo = ['nombre'=>$peticion->query('nombre', 'NN')];
        return view('vista1')->with($arreglo);
    }

}
