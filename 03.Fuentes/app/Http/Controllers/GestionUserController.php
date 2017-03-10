<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionUserController extends Controller
{
    //
    public function registroU() {
        return view('RegistroU.RegistroU');

      }

    public function deleteU() {
        return view('RegistroU.DeleteU');

    }

     public function findU() {
        return view('RegistroU.FindU');
    }

        public function searchU() {
        return view('RegistroU.SearchU');
    }
}
