<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    protected $casts = [
        'matricula' => 'date',
        'proxima_cobranca' => 'date', 
        // cast transforma direto em objeto Carbon
    ];

    public function turma(){
        return $this->belongsTo(Turmas::class, 'turma_id');
        // cada aluno pertence a uma turma
    }

    Protected static function booted(){
        static::creating(function ($aluno) { //evento que será executado antes de salvar um registro no BD
           $aluno->proxima_cobranca = $aluno->matricula->copy()->addMonth();
           /*
            $aluno->matricula pega a data de matricula do aluno q é um objeto carbon, 
            vai criar uma cópia desse objeto para não alterar a data original e 
                soma 1 mês a essa cópia com o addMonth(). Tudo é atribuído à $aluno->proxima_cobranca
            */
        });
    }

    public function isPendente(): bool{
        return $this->proxima_cobranca->lte(Carbon::today());
    }

    
    public function pagarMensalidade(): void
    {
        $this->proxima_cobranca = $this->proxima_cobranca->copy()->addMonth();
        $this->save();
        // Marca a mensalidade como paga (soma +1 mês à próxima cobrança)
    }
}

