<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    protected $fillable = [
        'nome',
        'matricula',
        'endereco',
        'transtornos',
        'nome_responsavel',
        'numero_responsavel',
        'mensalidade',
        'turma_id'  
    ];
    // cada aluno pertence a uma turma
    public function turma()
    {
        return $this->belongsTo(Turmas::class, 'turma_id');
    }
}

