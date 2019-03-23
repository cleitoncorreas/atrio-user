<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class questionariosPergunta extends Model
{
    protected $connection = 'another';

    protected $fillable = [
        'id_questionario',
        'pergunta',
        'padrao',
        'foto',
        'situacao'
    ];
}
