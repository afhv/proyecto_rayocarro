<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfil;
use Session;

class PerfilController extends Controller
{
    //
    public function index(Request $request)
    {
        $perfiles = Perfil::all();
        return view('Perfil.index', ['perfiles' => $perfiles]);
    }

    public function create(Request $request)
    {
        return view('Perfil.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'nombre' => 'required | string | alpha_dash | max:50',
        ]);

        Perfil::create($input);
        Session::flash('flash_message_ok', 'Perfil successfully added!');
        return redirect(url('perfils/'));
    }

    public function show(Request $request, $id)
    {
        try
        {
            $perfil = Perfil::findOrFail($id);
            return view('Perfil.show', ['data' => $perfil]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message_ko', "El perfil ($id) no ha sido encontrado!");
            return redirect()->back();
        }
    }

    public function edit(Request $request, $id)
    {
        try
        {
            $perfil = Perfil::findOrFail($id);
            return view('Perfil.edit', ['data' => $perfil]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "El perfil ($id) no pudo ser encontrado para ser editado!");
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        try
        {
            $perfil = Perfil::findOrFail($id);
            $this->validate($request, [
                'nombre' => 'required | string | alpha_dash | max:50',
            ]);
            $input = $request->all();
            $perfil->fill($input)->save();
            Session::flash('flash_message_ok', 'User successfully edited!');
            return redirect('/perfils');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "The User ($id) could not be found to be
edited!");
            return redirect()->back();
        }
    }

    public function destroy(Request $request, $id)
    {
        try
        {
            $perfil = Perfil::findOrFail($id);
            $perfil->delete();
            Session::flash('flash_message_ok', 'Perfil eliminado correctamente!');
            return redirect('/perfils');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message_ko', "El perfil ($id) no se encontró para ser eliminado!");
            return redirect()->back();
        }
    }
}
