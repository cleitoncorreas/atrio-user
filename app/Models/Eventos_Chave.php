<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eventos_Chave extends Model
{
    protected $connection = 'another';

    protected $fillable = [
        'id_emissor',
        'id_chave',
        'id_status',
        'id_situacao',
        'data_hora_saida',
        'data_hora_entrada'
    ];
}
