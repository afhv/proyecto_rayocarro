<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionCondController extends Controller
{


    //Para agregar:
    public function create(Request $request)
    {
        return view('conductores.create');
    }


    //Para agregar:

    public function store(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'f_registroC' => 'required | date',
            'nombreC' => 'required | string | alpha_dash | max:20',
            'apellidoC' => 'required |string | max:20',
            'tipo_doc' => 'required | string | alpha_dash | max:20',
            'numero_doc' => 'required |number | max:20',
            'generoC' => 'required | string | alpha_dash | max:20']);
        $input = $request->all();
        Conductor::create($input);
        Session::flash('flash_message_ok', 'Driver successfully added!');
        return redirect(url('conductores/'));


    }
}



