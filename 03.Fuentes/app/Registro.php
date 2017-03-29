<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    //
    protected $fillable = [
        'conductor_id, usuario_id, fecha, tipo',
    ];

    public function conductor()
    {
        return $this->belongsTo('App\Conductor');
    }

    public function usuario()
    {
        return $this->belongsTo('App\User');
    }

}
