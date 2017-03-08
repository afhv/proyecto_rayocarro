<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionCondController extends Controller
{
     public function index() {
        return view('Sitio/index');

     }

      public function registroC() {
        return view('GestionarConductor.FormRegistro');

      }

    public function deleteC() {
        return view('GestionarConductor.FormDelete');

    }

     public function find() {
        return view('GestionarConductor.FormSearch');
    }

        public function search() {
        return view('GestionarConductor.FormFind');
    }
}
