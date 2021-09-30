<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlacasUsadas extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $table="placas_usadas";

    protected $fillable = [
        'placa','cantidad','atencion','paciente','resultado','usuario'
    ];

    
    //
}