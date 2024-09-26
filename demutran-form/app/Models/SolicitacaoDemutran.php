<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitacaoDemutran extends Model
{
    use HasFactory;

    // Nome correto da tabela no banco de dados
    protected $table = 'solicitacao_demutran';

    protected $fillable = [
        'tipo_solicitacao',
        'nome',
        'telefone',
        'email',
        'assunto',
        'descricao',
        'doc_requerimento_url',
        'cnh_url',
    ];
}