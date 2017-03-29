<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registro;
use App\Vehiculo;
use App\Conductor;
use Session;
use Illuminate\Support\Facades\Auth;

class RegistroESController extends Controller
{
    public function index()
    {
        $registros = Registro::all();
        return view('RegistroES.index', ['registros' => $registros]);
    }

    public function create(Request $request)
    {
        $vehiculos = Vehiculo::pluck('placaV', 'id');
        return view('RegistroES.create', compact('id', 'vehiculos'));
        //['list' => $vehiculos]);
    }

    public function store(Request $request) {
        $input = $request->all();

        $this->validate($request, [
            'vehiculo' => 'required',
            //'conductor' => 'required|different:-1',
            'fecha' => 'required',
            'hora' => 'required',
            'tipo' => 'required',
        ]);

        $conductor = Conductor::where('vehiculo_id',$request['vehiculo'])->where('persona_id',$request['conductor'])->first();

        $fechaHora = date('Y-m-d H:i:s', strtotime($request['fecha'].' '.$request['hora']));

        $registro = new Registro;
        $registro->conductor_id = $conductor->id;
        $registro->fecha = $fechaHora;
        $registro->tipo = $request['tipo'];
        $registro->usuario_id = Auth::user()->id;
        $registro->save();

        //Registro::create($input);
        Session::flash('flash_message_ok', 'Registro adicionado correctamente!');
        return redirect(url('registros/'));
    }

    public function show(Request $request, $id)
    {
        try
        {
            $registro = Registro::findOrFail($id);
            return view('RegistroES.show', ['data' => $registro]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message_ko', "El registro ($id) no ha sido encontrado!");
            return redirect()->back();
        }
        return view('RegistroES.show');
    }

    public function destroy(Request $request, $id)
    {
        try
        {
            $registro = Registro::findOrFail($id);
            $registro->delete();
            Session::flash('flash_message_ok', 'Registro eliminado correctamente!');
            return redirect('registros/');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message_ko', "El registro ($id) no se encontró para ser eliminado!");
            return redirect()->back();
        }

    }

    public function edit(Request $request, $id)
    {
        try
        {
            $registro = Registro::findOrFail($id);
            $vehiculos = Vehiculo::pluck('placaV', 'id');
            return view('RegistroES.edit', ['data' => $registro, 'vehiculos' => $vehiculos]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "El registro ($id) no pudo ser encontrado para ser editado!");
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        try
        {
            $registro = Registro::findOrFail($id);
            $this->validate($request, [
                'vehiculo' => 'required',
                //'conductor' => 'required|different:-1',
                'fecha' => 'required',
                'hora' => 'required',
                'tipo' => 'required',
            ]);
            $input = $request->all();

            $conductor = Conductor::where('vehiculo_id',$request['vehiculo'])->where('persona_id',$request['conductor'])->first();

            $fechaHora = date('Y-m-d H:i:s', strtotime($request['fecha'].' '.$request['hora']));

            $registro->conductor_id = $conductor->id;
            $registro->fecha = $fechaHora;
            $registro->tipo = $request['tipo'];
            $registro->usuario_id = Auth::user()->id;
            $registro->save();
            Session::flash('flash_message_ok', 'Registro editado correctamente!');
            return redirect('registros/');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "El registro ($id) no se encuentra para ser editado!");
            return redirect()->back();
        }
    }

}
