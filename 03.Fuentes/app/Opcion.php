<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opcion extends Model
{
    //
    protected $fillable = [
        'menu', 'submenu', 'url',
    ];

    public function perfils()
    {
        return $this->belongsToMany('App\Perfil')->withTimestamps();
    }
}
