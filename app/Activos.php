<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activos extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table="activos";

    protected $fillable = [
        'nombre','descripcion','precio','estado', 'estatus','usuario','ubicacion','sede'
    ];

    
    //
}