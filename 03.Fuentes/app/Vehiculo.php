<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use App\User;


class Vehiculo extends Model
{
    use Notifiable;

    protected $fillable = [
        'f_ingreso', 'placaV', 'marcaV', 'modeloV','colorV', 'user_id'
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
