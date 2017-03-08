<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
     public function index() {
        return view('Sitio/index');
    }
      public function encuestaSatisfaccion() {
        return view('FormularioConductor.FormRegistro');
    }
}
