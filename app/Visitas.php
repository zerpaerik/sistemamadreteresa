<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitas extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="visitas";

    protected $fillable = [
        'profesional','turno','usuario'
    ];

    
    //
}
