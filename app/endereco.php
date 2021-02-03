<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class endereco extends Model
{
    protected $fillable = [
        'ceep', 'bairro', 'estado', 'cidade', 'rua', 'numero'
    ];
    //
}
