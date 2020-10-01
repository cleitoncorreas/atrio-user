<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Localidade extends Model
{
    protected $connection = 'mysql';

    protected $fillable = [
        'foto',
        'descricao',
        'endereco',
        'cidade',
        'telefone',
        'bairro'
    ];
}
