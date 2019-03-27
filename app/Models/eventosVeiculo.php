<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class eventosVeiculo extends Model
{
    protected $connection = 'another';

    public $timestamps = false;

    protected $fillable = [
        'id_emissor',
        'id_motorista',
        'id_veiculo',
        'id_localidade',
        'data_hora_saida',
        'data_hora_entrada'
    ];

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'id_emissor');
    }

    public function motorista()
    {
        return $this->belongsTo(Motorista::class,'id_motorista','id_funcionario');
    }

    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class, 'id_veiculo');
    }

    public function localidade()
    {
        return $this->belongsTo(Localidade::class, 'id_localidade');
    }
}
