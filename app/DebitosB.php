<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DebitosB extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table="debitosb";

    protected $fillable = [
        'descripcion','tipopago','usuario','monto','sede','origen','tipo','recibido','tipo_deb','id_gastoa'
    ];

    
    //
}
