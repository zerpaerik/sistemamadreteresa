<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comisiones extends Model
{

    protected $table="comisiones";

    protected $fillable = [
        'id_atencion', 'monto', 'porcentaje', 'usuario','estatus'
    ];
    //
}
