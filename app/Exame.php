<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exame extends Model
{
    protected $table = 'exame', $primaryKey='codigo';
    protected $fillable = [
        'resuldados_paciente', 'paciente_codigo'
    ];
    //
}
