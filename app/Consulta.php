<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $table = 'consulta', $primaryKey='codigo'; 

    protected $fillable = [
        'data', 'hora', 'medico_codigo'
    ];

    //
}
