<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anotaciones extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table="anotaciones";

    protected $fillable = [
        'id_resultado','texto','fecha'
    ];

    
    //
}