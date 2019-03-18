<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class eventosVeiculo extends Model
{
    protected $connection = 'another';

    protected $fillable = [
        'id_emissor',
        'id_motorista',
        'id_veiculo',
        'id_localidade',
        'id_status',
        'id_situacao',
        'data_hora_saida',
        'data_hora_entrada'
    ];
}
