<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorEjercicio2 extends Controller
{
    public function pruebaParametros($param1,$param2,$param3,$param4) {
        $text = "Estos son los parametros que has escrito: ".$param1." ".$param2." ".$param3." ".$param4." ";
        return view("segundaView") -> with(['text'=>$text]);
    }
}
