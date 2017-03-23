<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionCondController extends Controller
{
    public function index() {
        return view('Sitio/index');

    }

    public function registroC() {
        return view('RegistroC.RegistroC');

    }

    public function deleteC() {
        return view('RegistroC.DeleteC');

    }

    public function findC() {
        return view('RegistroC.FindC');
    }

    public function searchC() {
        return view('RegistroC.SearchC');
    }
}
