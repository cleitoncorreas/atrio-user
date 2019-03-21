<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pergunta extends Model
{
    protected $connection = 'another';

    protected $fillable = [
        'pergunta',
        'padrao',
        'foto',
        'situacao'
    ];
}
