<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoriaBM extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table="ant_medicina";

    protected $fillable = [
        'id_paciente'
    ];

    
    //
}
