<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bienvenidoController extends Controller
{
    public function bienvenido(){
        $nombre = "Luis";
        $alumnos =['Ximena', 'Perez', 'Sergio', 'Evelyn', 'Dani', 'Juan', 'David', 'Kyan', 'Eitan', 'Adrian', 'Leo'];
        $datos = array(['nombre' => 'Ximena', 'edad' => 17, 'turno' => 'Vespertino'],
                       ['nombre' => 'Perez', 'edad' => 20, 'turno' => 'Matutino'],
                       ['nombre' => 'Sergio', 'edad' => 15, 'turno' => 'Nocturno'],
                       ['nombre' => 'Evelyn', 'edad' => 16, 'turno' => 'Vespertino'],
                       ['nombre' => 'Dani', 'edad' => 18, 'turno' => 'Matutino'],
                       ['nombre' => 'Juan', 'edad' => 24, 'turno' => 'Matutino'],
                       ['nombre' => 'david', 'edad' => 28, 'turno' => 'Vespertino']);

        return view('bienvenido', compact('nombre', 'alumnos', 'datos'));
    }
}
