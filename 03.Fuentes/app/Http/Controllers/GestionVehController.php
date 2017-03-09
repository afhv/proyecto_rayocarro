<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionVehController extends Controller
{
    //
    public function registroV() {
        return view('RegistroV.RegistroV');

      }

    public function deleteV() {
        return view('RegistroV.DeleteV');

    }

     public function findV() {
        return view('RegistroV.FindV');
    }

        public function searchV() {
        return view('RegistroV.SearchV');
    }
}
