<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroESController extends Controller
{
     public function new() {
        return view('RegistroES/New');
    }

    public function save($placa, $conductor, $fecha, $hora, $tipo) {
        echo "Se registró el ". $tipo . " del vehiculo " . $placa . " conducido por " . $conductor . "siendo las ". $hora . " del " . $fecha;
    }
}
