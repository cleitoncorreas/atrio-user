<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class eventosQuestionario extends Model
{
    protected $connection = 'another';
    
    protected $fillable = [
        'id_evento',
        'id_perguntas'
    ];    
}
