<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turmas extends Model
{
    protected $fillable = ['nome', 'horario'];

    public function alunos(){
        return $this->hasMany(Alunos::class);
    }
}
