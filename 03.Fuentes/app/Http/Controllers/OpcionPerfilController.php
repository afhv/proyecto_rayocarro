<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfil;
use App\Opcion;
use Session;

class OpcionPerfilController extends Controller
{
    //
    public function edit(Request $request, $id)
    {
        try
        {
            $perfil = Perfil::findOrFail($id);
            $opciones = Opcion::all();
            return view('Perfil.opciones', ['data' => $perfil, 'opciones' => $opciones]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message_ko', "El perfil ($id) no se encontró para listar las opciones!");
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        try
        {
            $perfil = Perfil::findOrFail($id);
            $input = $request->except('_method','_token');
            $perfil->opcions()->sync($input);
            Session::flash('flash_message_ok', 'Opciones de menu successfully edited!');
            return redirect('/perfils');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "El perfil ($id) could not be found to be edited!");
            return redirect()->back();
        }
    }
}
