<?php

use App\Http\Controllers\TurmasController;
use App\Http\Controllers\AlunosController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

/*Route::get('/', function () {
    return view('welcome');
})->name('home');*/

// Essa rota puxa a página de turmas acessando a classe TurmasController, utilizando o método index.
Route::get('/turmas', [TurmasController::class, 'index'])->name('turmas.index');

Route::get('/show-turma/{turma}', [TurmasController::class,'show'])->name('turmas.show');

Route::get('/criar-turma', [TurmasController::class,'create'])->name('turmas.create');

Route::post('/store-turma', [TurmasController::class, 'store'])->name('store-turmas');

Route::get('/edit-turma/{turma}', [TurmasController::class,'edit'])->name('turmas.edit');

Route::put('/update-turma/{turma}', [TurmasController::class, 'update'])->name('turma-update');

Route::delete('/destroy-turma/{turma}', [TurmasController::class,'destroy'])->name('turmas.destroy');


// Essa rota puxa a página de alunos acessando a classe AlunosController, utilizando o método index.
Route::get('/turmas/{turma}/criar-alunos', [AlunosController::class, 'create'])->name('alunos.create');

Route::post('/turmas/{turma}/alunos', [AlunosController::class, 'store'])->name('store.alunos');

Route::get('alunos/{aluno}/edit', [AlunosController::class, 'edit'])->name('alunos.edit');

Route::put('/alunos/{aluno}', [AlunosController::class, 'update'])->name('alunos.update');

Route::get('/alunos/{aluno}', [AlunosController::class,'show'])->name('alunos.show');

Route::delete('/destroy-aluno/{aluno}', [AlunosController::class, 'destroy'])->name('alunos.destroy');

Route::patch('/alunos/{aluno}/pagar', [AlunosController::class, 'pagarMensalidade'])->name('alunos.pagar');

