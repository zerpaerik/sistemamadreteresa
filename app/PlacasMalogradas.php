<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlacasMalogradas extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $table="placas_malogradas";

    protected $fillable = [
        'placa','cantidad','atencion','paciente','resultado','usuario'
    ];

    
    //
}