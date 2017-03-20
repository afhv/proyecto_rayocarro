<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;
use App\Perfil;
use Illuminate\Support\Facades\Log;
use View;

class UserController extends Controller
{
    //Para listar:

    public function index(Request $request)
    {
        $users = User::all();
        return view('RegistroU.index', ['list' => $users]);
    }




    //Para mostrar info detallada:

    public function show(Request $request, $id)
    {
        try
        {
            $user = User::findOrFail($id);
            return view('users.show', ['data' => $user]);
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
        $perfiles = Perfil::all(['id', 'nombre']);
        return View::make('RegistroU.create', compact('perfiles',$perfiles));
    }


    //Para agregar:

    public function store(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'name' => 'required | string | alpha_dash | max:50',
            'email' => 'required | email',
            'password' => 'required | min:6',
            'password_confirmation' => 'required| min:6 | same:password',
        ]);

        User::create($input);
        Session::flash('flash_message_ok', 'User successfully added!');
        return redirect(url('users/'));
    }


    //Para editar:


    public function edit(Request $request, $id)
    {
        try
        {
            $user = User::findOrFail($id);
            return view('users.edit', ['data' => $user]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "The User ($id) could not be found to be
edited!");
            return redirect()->back();
        }
    }



    //Para editar
    public function update(Request $request, $id)
    {
        try
        {
            $user = User::findOrFail($id);
            $this->validate($request, [
                'name' => 'required | string | alpha_dash | max:66',
                'email' => 'required | email',
                'password' => 'required | string | min:8 | max:64',
            ]);
            $input = $request->all();
            $user->fill($input)->save();
            Session::flash('flash_message', 'User successfully edited!');
            return redirect('/home');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "The User ($id) could not be found to be
edited!");
            return redirect()->back();
        }
    }




    //para eliminar
    public function destroy(Request $request, $id)
    {
        try
        {
            $user = User::findOrFail($id);
            $user->delete();
            Session::flash('flash_message', 'User successfully deleted!');
            return redirect('/home');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "The User ($id) could not be found to be
deleted!");
            return redirect()->back();
        }
    }
}
