<?php

namespace App\Http\Controllers;

use App\Http\Requests\TurmasRequest;
use App\Models\Turmas;

//use Illuminate\Http\Request;

class TurmasController extends Controller
{
    public function index(){
        return view('turmas.index');
    }

    public function create(){
        return view('turmas.create');
    }

    public function store(TurmasRequest $request){
        // validando formulário
        $request->validated();

        Turmas::create([
            'nome' => $request->nome,
            'horario' => $request->horario
        ]);
        return redirect()->route('turmas.index')->with('sucsess', 'Nova turma foi criada!');
    }
}

