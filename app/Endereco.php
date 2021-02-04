<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'endereco', $primaryKey='codigo';
    protected $fillable = [
        'ceep', 'bairro', 'estado', 'cidade', 'rua', 'numero', 'usuario_codigo'
    ];
    //
}
