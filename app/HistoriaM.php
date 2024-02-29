<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoriaM extends Model
{

    protected $table="historia_medicina";

    protected $fillable = [
        'id_paciente', 'id_consulta'
    ];
    //
}
