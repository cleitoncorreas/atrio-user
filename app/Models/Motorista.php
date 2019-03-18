<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
    protected $connection = 'another';

    protected $fillable = [
        'id_funcionario',
        'matricula_empresa',
        'foto',
        'cnh',
        'validade',
        'id_situacao'
    ];

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'id_funcionario');
    }
}
