<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opcion;
use Session;

class OpcionController extends Controller
{
    //
    public function index(Request $request)
    {
        $opciones = Opcion::all();
        return view('Opcion.index', ['opciones' => $opciones]);
    }

    public function create(Request $request)
    {
        return view('Opcion.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'menu' => 'required | string | min:3 | max:50',
            'submenu' => 'required | string | min:3 | max:50',
            'url' => 'required | string | min:5',
        ]);

        Opcion::create($input);
        Session::flash('flash_message_ok', 'Opcion de menú successfully added!');
        return redirect(url('opcions/'));
    }

    public function show(Request $request, $id)
    {
        try
        {
            $opcion = Opcion::findOrFail($id);
            return view('Opcion.show', ['data' => $opcion]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message_ko', "La opcion de menu ($id) no ha sido encontrada!");
            return redirect()->back();
        }
    }

    public function edit(Request $request, $id)
    {
        try
        {
            $opcion = Opcion::findOrFail($id);
            return view('Opcion.edit', ['data' => $opcion]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "La opción de menu ($id) no pudo ser encontrada para ser editada!");
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        try
        {
            $opcion = Opcion::findOrFail($id);
            $this->validate($request, [
                'menu' => 'required | string | min:3 | max:50',
                'submenu' => 'required | string | min:3 | max:50',
                'url' => 'required | string | min:5',
            ]);
            $input = $request->all();
            $opcion->fill($input)->save();
            Session::flash('flash_message_ok', 'Opción de menú successfully edited!');
            return redirect('opcions/');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "La opción de menú ($id) could not be found to be
edited!");
            return redirect()->back();
        }
    }

    public function destroy(Request $request, $id)
    {
        try
        {
            $opcion = Opcion::findOrFail($id);
            $opcion->delete();
            Session::flash('flash_message_ok', 'Opción de menú eliminada correctamente!');
            return redirect('opcions/');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message_ko', "La opción de menú ($id) no se encontró para ser eliminada!");
            return redirect()->back();
        }
    }
}
