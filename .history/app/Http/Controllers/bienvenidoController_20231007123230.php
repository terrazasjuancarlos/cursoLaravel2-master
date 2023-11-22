<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bienvenidoController extends Controller
{
    public function bienvenido(){
        $nombre = "Luis";
        $alumnos =['Juan', 'Pedro', 'Maria', 'Jose', 'Raul', 'Otro', 'Otro2'];
        return view('bienvenido', compact('nombre'));
    }
}
