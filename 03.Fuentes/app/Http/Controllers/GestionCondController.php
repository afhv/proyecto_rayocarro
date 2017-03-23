<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\Conductor;
use App\Vehiculo;
use Illuminate\Support\Facades\Log;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class GestionCondController extends Controller
{
    public function registroC() {
        return view('RegistroC.RegistroC');

    }

    //Para agregar:
    public function create(Request $request)
    {
        $vehiculos = Vehiculo::all();
        //dd($vehiculos);
        return view('conductores.create')->with('vehiculos',$vehiculos);

    }


    //Para agregar:

    public function store(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'f_registroC' => 'required | date',
            'nombreC' => 'required | string | max:20',
            'apellidoC' => 'required |string | max:20',
            'tipo_doc' => 'required | string | alpha_dash | max:20',
            'numero_doc' => 'required| min:6 | max:12',
            'generoC' => 'required | string | alpha_dash | max:20',]);

        $input = $request->all();
        Conductor::create($input);
        Session::flash('flash_message_ok', 'Driver successfully added!');
        return redirect(url('conductores/'));


    }


    public function index(Request $request)
    {
        $conductores = Conductor::all();
        return view('conductores.index', ['list' => $conductores]);
    }

    public function findC() {
        return view('RegistroC.FindC');
    }

    public function searchC() {
        return view('RegistroC.SearchC');

    public function show(Request $request, $id)
    {
        try
        {
            $conductores = Conductor::findOrFail($id);
            return view('conductores.show', ['data' => $conductores]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "El vehiculo de placa ($id) no ha sido enconrtrado!");
            return redirect()->back();
        }
    }


    public function edit(Request $request, $id)
    {
        try
        {
            $conductores = Conductor::findOrFail($id);
            return view('conductores.edit', ['data' => $conductores]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "The Driver ($id) could not be found to be
edited!");
            return redirect()->back();
        }
    }



    //Para editar
    public function update(Request $request, $id)
    {
        try
        {
            $conductores = Conductor::findOrFail($id);
            $this->validate($request, [
                'f_registroC' => 'required | date',
                'nombreC' => 'required | string | max:20',
                'apellidoC' => 'required |string | max:20',
                'tipo_doc' => 'required | string | alpha_dash | max:20',
                'numero_doc' => 'required| min:6 | max:12',
                'generoC' => 'required | string | alpha_dash | max:20']);
            $input = $request->all();
            $conductores->fill($input)->save();
            Session::flash('flash_message', 'Driver successfully edited!');
            return redirect('/conductores');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "The Driver ($id) could not be found to be
edited!");
            return redirect()->back();
        }

    }

    //para eliminar
    public function destroy(Request $request, $id)
    {
        try
        {
            $conductores = Conductor::findOrFail($id);
            $conductores ->delete();
            Session::flash('flash_message', 'Driver successfully deleted!');
            return redirect('/conductores');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "The Driver ($id) could not be found to be
deleted!");
            return redirect()->back();
        }
    }

}
