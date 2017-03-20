<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;


class Vehiculo extends Model
{
    use Notifiable;

    protected $fillable = [
         'f_ingreso', 'placaV', 'marcaV', 'modeloV','colorV'
    ];



    protected $hidden = [
        'password', 'remember_token',
    ];



}
