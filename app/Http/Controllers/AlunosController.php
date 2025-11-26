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
        $turma = $aluno->turma; //passa a turma correta de cada aluno
        return view('alunos.show', ['aluno' => $aluno, 'turma' => $turma]); 
        //dd($aluno);
    }

    public function edit( Alunos $aluno){
        $turma = $aluno->turma;
        return view('alunos.edit', compact ('aluno', 'turma'));
    }

    public function update(AlunosRequest $request, Alunos $aluno){
        $request->validated();

        //Editando dados da turma
        $aluno->update([
            'nome' => $request->nome,
            'matricula' => $request->matricula,
            'endereco' => $request->endereco,
            'transtornos' => $request->transtornos,
            'nome_responsavel' => $request->nome_responsavel,
            'numero_responsavel' => $request->numero_responsavel,
            'mensalidade' => $request->mensalidade
        ]);
        return redirect()->route('turmas.show', ['turma' => $aluno->turma_id])->with('success', 'Aluno atualizado!')->with('updated_id', $aluno->id);
    }

    public function destroy(Alunos $aluno){
        //pega a turma correta antes de excluir   
        $turmaId = $aluno->turma_id; 

        $aluno->delete();
        return redirect()->route('turmas.show', ['turma' => $turmaId])->with('success', 'Aluno excluído(a)!');
    }


}
