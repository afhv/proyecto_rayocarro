<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\Vehiculo;
use Session;

class ConductorVehiculoController extends Controller
{
    public function edit(Request $request, $id)
    {
        $persona = Persona::find($id);
        $vehiculos = Vehiculo::all();
        return view('Persona.vehiculos', ['data' => $persona, 'list' => $vehiculos]);
    }

    public function update(Request $request, $id)
    {
        try
        {
            $persona = Persona::findOrFail($id);
            $input = $request->except('_method','_token');
            $persona->vehiculos()->sync($input);
            Session::flash('flash_message_ok', 'Vehiculos para un conductor actualizados correctamente!');
            return redirect('/personas');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "El conductor ($id) no pudo ser encontrado para ser editado!");
            return redirect()->back();
        }
    }
}
