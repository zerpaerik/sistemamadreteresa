<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoriaBaseP extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table="ant_pediatricos";

    protected $fillable = [
        'id_paciente','fam_mat','fam_ad','fam_her'
    ];

    
    //
}
