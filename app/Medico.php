<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'medico', $primaryKey='codigo';
    protected $fillable = [
        'especialidade', 'usuario_codigo'
    ];

    //
}
