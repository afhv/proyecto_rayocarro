<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use App\Vehiculo;

class Conductor extends Model
{
    use Notifiable;

    protected $fillable = [
        'f_registroC', 'nombreC', 'apellidoC', 'tipo_doc','numero_doc', 'generoC', 'vehiculo_id'
    ];

    public function vehiculo()
    {
        return $this->belongsTo('App\Vehiculo');
    }
}
