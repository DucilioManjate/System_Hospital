<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    
    protected $table = 'paciente', $primaryKey='codigo'; // varialvel
    protected $fillable = [
        'guia_consulta',  'diagnostico'
    ];
    
}
