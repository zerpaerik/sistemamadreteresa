<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Placas extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $table="placas";

    protected $fillable = [
        'nombre'
    ];

    
    //
}
