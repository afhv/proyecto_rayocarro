<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use Session;

class PersonaController extends Controller
{
    //
    public function index(Request $request)
    {
        $personas = Persona::all();
        return view('Persona.index', ['personas' => $personas]);
    }

    public function create(Request $request)
    {
        return view('Persona.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'documento' => 'required | digits_between:7,15',
            'nombre' => 'required | string | min:3 | max:50',
            'apellido' => 'required | string | min:5 | max:50',
            'genero' => 'required',
            'telefono' => 'required | digits_between:7,10',
        ]);

        Persona::create($input);
        Session::flash('flash_message_ok', 'Persona successfully added!');
        return redirect(url('personas/'));
    }

    public function show(Request $request, $id)
    {
        try
        {
            $persona = Persona::findOrFail($id);
            return view('Persona.show', ['data' => $persona]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message_ko', "La persona($id) no ha sido encontrada!");
            return redirect()->back();
        }
    }

    public function edit(Request $request, $id)
    {
        try
        {
            $persona = Persona::findOrFail($id);
            return view('Persona.edit', ['data' => $persona]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "La persona ($id) no pudo ser encontrada para ser editada!");
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        try
        {
            $persona = Persona::findOrFail($id);
            $this->validate($request, [
                'documento' => 'required | digits_between:7,15',
                'nombre' => 'required | string | min:3 | max:50',
                'apellido' => 'required | string | min:5 | max:50',
                'genero' => 'required',
                'telefono' => 'required | digits_between:7,10',
            ]);
            $input = $request->all();
            $persona->fill($input)->save();
            Session::flash('flash_message_ok', 'Persona successfully edited!');
            return redirect('personas/');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "La persona ($id) could not be found to be
edited!");
            return redirect()->back();
        }
    }

    public function destroy(Request $request, $id)
    {
        try
        {
            $persona = Persona::findOrFail($id);
            $persona->delete();
            Session::flash('flash_message_ok', 'Persona eliminada correctamente!');
            return redirect('personas/');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message_ko', "La persona ($id) no se encontró para ser eliminada!");
            return redirect()->back();
        }
    }

}
