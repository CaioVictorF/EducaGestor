<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunosRequest;
use App\Models\Alunos;
use App\Models\Turmas;

class AlunosController extends Controller
{
    public function create(Turmas $turma){
        return view('alunos.create', compact('turma'));
    }

     public function store(AlunosRequest $request, Turmas $turma){
        $request->validated();

        Alunos::create([
            'nome' => $request->nome,
            'matricula' => $request->matricula,
            'endereco' => $request->endereco,
            'transtornos' => $request->transtornos,
            'nome_responsavel' => $request->nome_responsavel,
            'numero_responsavel' => $request->numero_responsavel,
            'mensalidade' => $request->mensalidade,
            'turma_id' => $turma->id
        ]);
        return redirect()->route('turmas.show', $turma->id)->with('success', 'Novo aluno(a) foi criado!');
    }

    public function show(Alunos $aluno){
        return view('alunos.show', compact('aluno'));
    }

}
