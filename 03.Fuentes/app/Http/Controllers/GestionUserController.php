<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionUserController extends Controller
{
    //
    public function registroC() {
        return view('RegistroC.RegistroC');

      }

    public function deleteC() {
        return view('RegistroC.DeleteC');

    }

     public function find() {
        return view('RegistroC.FindC');
    }

        public function search() {
        return view('RegistroC.SearchC');
    }
}
