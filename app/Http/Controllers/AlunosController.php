<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunosRequest;
use App\Models\Alunos;

class AlunosController extends Controller
{
    public function create(){
        return view('alunos.create');
    }

    public function store(AlunosRequest $request){
        $request->validated();

        Alunos::create([
            'nome_aluno' => $request->nome_aluno,
            'matricula' => $request->matricula,
            'endereço' => $request->endereço,
            'nome_responsável' => $request->nome_responsável,
            'numero_responsável' => $request->numero_responsável,
            'mensalidade' => $request->mensalidade
        ]);
    }
}
