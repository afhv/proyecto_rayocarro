<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    protected $fillable = [
        'documento', 'nombre', 'apellido', 'telefono', 'genero',
    ];

    public function vehiculos()
    {
        return $this->belongsToMany('App\Vehiculo')->withTimestamps();
    }
}
