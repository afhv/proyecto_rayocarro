<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'perfil_id',
    ];



    protected $hidden = [
        'password', 'remember_token',
    ];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function perfil()
    {
        return $this->belongsTo('App\Perfil');
    }

    public function vehiculos()
    {
        return $this->hasMany('App\Vehiculo');
    }





    public function setPasswordAttribute($plainPassword){
        $this->attributes['password']=Hash::make($plainPassword);
    }
}
