<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $connection = 'another';

    protected $fillable = [
        'marca',
        'modelo',
        'foto',
        'kilometragem',
        'placa',
        'local',
        'ano_fabricacao',
        'ano_modelo',
        'chassi',
        'renavam',
        'numero_motor',
        'cor',
        'renavam',
        'numero_motor',
        'cor',
        'tipo_combustivel',
        'especie',
        'tipo_veiculo'
    ];
}
