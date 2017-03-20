<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Vehiculo;
use Illuminate\Support\Facades\Log;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;


class GestionVehController extends Controller
{
    //Para listar:

    public function index(Request $request)
    {
        $vehiculos = Vehiculo::all();
        return view('vehiculos.index', ['list' => $vehiculos]);
    }


    //Para mostrar info detallada:

    public function show(Request $request, $id)
    {
        try
        {
            $vehiculos = Vehiculo::findOrFail($id);
            return view('vehiculos.show', ['data' => $vehiculos]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "El vehiculo de placa ($id) no ha sido enconrtrado!");
            return redirect()->back();
        }
    }


    //Para agregar:
    public function create(Request $request)
    {
        return view('vehiculos.create');
    }


    //Para agregar:

    public function store(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'f_ingreso' => 'required | date',
            'placaV' => 'required | string | alpha_dash | max:6',
            'marcaV' => 'required |string | max:20',
            'modeloV' => 'required | string | alpha_dash | max:20',
            'colorV' => 'required |string | max:20' ]);
        $input = $request->all();
        Vehiculo::create($input);
        Session::flash('flash_message_ok', 'Vehicle successfully added!');
        return redirect(url('vehiculos/'));


    }

    //Para editar:


    public function edit(Request $request, $id)
    {
        try
        {
            $vehiculos = Vehiculo::findOrFail($id);
            return view('vehiculos.edit', ['data' => $vehiculos]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "The Vehicle ($id) could not be found to be
edited!");
            return redirect()->back();
        }
    }



    //Para editar
    public function update(Request $request, $id)
    {
        try
        {
            $vehiculos = Vehiculo::findOrFail($id);
            $this->validate($request, [
                'f_ingreso' => 'required | date',
                'placaV' => 'required | string | alpha_dash | max:6',
                'marcaV' => 'required |string | max:20',
                'modeloV' => 'required | string | alpha_dash | max:20',
                'colorV' => 'required |string | max:20' ]);
            $input = $request->all();
            $vehiculos->fill($input)->save();
            Session::flash('flash_message', 'Vehicle successfully edited!');
            return redirect('/vehiculos');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "The Vehicle ($id) could not be found to be
edited!");
            return redirect()->back();
        }

    }



    //para eliminar
    public function destroy(Request $request, $id)
    {
        try
        {
            $vehiculos = Vehiculo::findOrFail($id);
            $vehiculos ->delete();
            Session::flash('flash_message', 'Vehicle successfully deleted!');
            return redirect('/vehiculos');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "The Vehicle ($id) could not be found to be
deleted!");
            return redirect()->back();
        }
    }



}
