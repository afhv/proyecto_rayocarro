<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\Conductor;
use Illuminate\Support\Facades\Log;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

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
            'nombreC' => 'required | string | max:20',
            'apellidoC' => 'required |string | max:20',
            'tipo_doc' => 'required | string | alpha_dash | max:20',
            'numero_doc' => 'required| min:6 | max:12',
            'generoC' => 'required | string | alpha_dash | max:20']);

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

}



