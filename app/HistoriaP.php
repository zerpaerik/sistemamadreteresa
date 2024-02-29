<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoriaP extends Model
{

    protected $table="historia_pediatrica";

    protected $fillable = [
        'id_paciente', 'id_consulta'
    ];
    //
}
