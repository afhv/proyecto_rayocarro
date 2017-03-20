<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Vehiculo;
use Illuminate\Support\Facades\Log;

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
            Session::flash('flash_message', "El usuario ($id) no ha sido enconrtrado!");
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

}
