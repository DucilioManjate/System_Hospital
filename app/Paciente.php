<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
  
    
    protected $table = 'paciente', $primaryKey='codigo'; // varialvel
    protected $fillable = [
        'guia_consulta',  'diagnostico', 'usuario_codigo', 'consulta_codigo'
    ];
    
}
