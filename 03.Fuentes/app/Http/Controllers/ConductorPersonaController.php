<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculo;
use App\Persona;
use Session;

class ConductorPersonaController extends Controller
{
    public function edit(Request $request, $id)
    {
        $vehiculo = Vehiculo::find($id);
        $personas = Persona::all();
        return view('vehiculos.conductores', ['data' => $vehiculo, 'personas' => $personas]);
    }

    public function update(Request $request, $id)
    {
        try
        {
            $vehiculo = Vehiculo::findOrFail($id);
            $input = $request->except('_method','_token');
            $vehiculo->conductors()->sync($input);
            Session::flash('flash_message_ok', 'Conductores para un vehiculo actualizados correctamente!');
            return redirect('/vehiculos');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "El vehiculo ($id) no pudo ser encontrado para ser editado!");
            return redirect()->back();
        }
    }
}
