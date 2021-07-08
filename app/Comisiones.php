<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comisiones extends Model
{

    protected $table="comisiones";

    protected $fillable = [
        'id_atencion', 'monto', 'porcentaje','id_responsable', 'usuario','estatus','recibo','fecha_pago','detalle','tecnologo'
    ];
    //
}
