<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ControladorEjercicio1 extends Controller
{
    //Metodes
    public function ej1Parametro() {
        return view('primeraView') -> with (['text'=>'Éste es el resultado del primer ejercicio de la práctica hecha por Matias Rodriguez Saldaña']);
    }
}
