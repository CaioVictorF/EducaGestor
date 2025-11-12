<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    public function turma(){
        return $this->belongsTo(Turmas::class);
    }
}
