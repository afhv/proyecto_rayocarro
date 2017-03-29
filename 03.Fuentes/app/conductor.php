<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    protected $table = 'persona_vehiculo';

    public function persona()
    {
        return $this->belongsTo('App\Persona');
    }

    public function vehiculo()
    {
        return $this->belongsTo('App\Vehiculo');
    }
}

