<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $connection = 'mysql';

    protected $fillable = [
        'matricula_fetranspor', 
        'matricula_empresa', 
        'pis', 
        'nome', 
        'cpf', 
        'renda_mensal',
        'valor_diario',
        'codigo_cidade',
        'codigo_rede',
        'numero_cartao',
        'tipo_cartao',
        'data_nascimento',
        'sexo',
        'rg',
        'orgao_emissor',
        'telefone',
        'email',
        'id_unidade',
        'id_departamento',
        'id_situacao',
        'remember_token',
        'created_at', 
        'updated_at'
    ];
}
