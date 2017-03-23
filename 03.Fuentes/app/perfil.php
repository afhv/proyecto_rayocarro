<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    //
    protected $fillable = [
        'nombre',
    ];

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
