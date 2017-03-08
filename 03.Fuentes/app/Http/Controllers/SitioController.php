<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
     public function index() {
        return view('Sitio/index');

     }

      public function registroC() {
        return view('FormularioConductor.FormRegistro');

      }

    public function deleteC() {
        return view('FormularioConductor.FormDelete');

    }
}
