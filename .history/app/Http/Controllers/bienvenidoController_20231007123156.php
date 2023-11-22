<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bienvenidoController extends Controller
{
    public function bienvenido(){
        $nombre = "Luis";
        $alumnos =[];
        return view('bienvenido', compact('nombre'));
    }
}
