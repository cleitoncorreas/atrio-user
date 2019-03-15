<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
    protected $connection = 'another';

    protected $fillable = [
        'matricula_empresa',
        'foto',
        'cnh',
        'validade'
    ];

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'id_funcionario');
    }
}
