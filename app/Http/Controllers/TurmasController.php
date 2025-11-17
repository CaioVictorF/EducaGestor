<?php

namespace App\Http\Controllers;

use App\Http\Requests\TurmasRequest;
use App\Models\Turmas;

//use Illuminate\Http\Request;

class TurmasController extends Controller
{
    public function index(){
        //Recuperando registros do Banco de dados
        $turmas = Turmas::orderBy('id')->get();

        return view('turmas.index', ['turmas' => $turmas]);
    }

    public function show(Turmas $turma){
        //retorna todos os alunos dessa turma
        $alunos = $turma->alunos()->orderBy('id')->get();
        
        return view('turmas.show', ['turma' => $turma, 'alunos' => $alunos]);
    
    }

    public function create(){
        return view('turmas.create');
    }

    public function store(TurmasRequest $request){
        //Validando formulário
        $request->validated();

        //Cadastrando nova turma
        Turmas::create([
            'nome' => $request->nome,
            'horario' => $request->horario 
        ]);
        //Redirecionando usuário com mensagem de sucesso
        return redirect()->route('turmas.index')->with('success', 'Nova turma foi criada!');
    }

    public function edit(Turmas $turma){
        return view('turmas.edit', ['turma' => $turma]);
    }

    public function update(TurmasRequest $request, Turmas $turma){
        $request->validated();

        //Editando dados da turma
        $turma->update([
            'nome' => $request->nome,
            'horario' => $request->horario
        ]);
        return redirect()->route('turmas.index', ['turma' => $turma->id])->with('success', 'Turma atualizada!');
    }

    public function destroy(Turmas $turma){
        //Deletando turma
        $turma->delete();
        return redirect()->route('turmas.index', ['turma' => $turma->id])->with('success', 'Turma excluída!');
        
    }
}

