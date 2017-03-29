<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculo;

class RayoCarroFunctionsController extends Controller
{
    public function obtainConductores($id)
    {
        try
        {
            $vehiculo = Vehiculo::findOrFail($id);
            $conductores = $vehiculo->conductors->toArray();
            return $conductores;
        }
        catch(ModelNotFoundException $e)
        {
            return null;
        }
    }
}
