<?php

use App\Http\Controllers\TurmasController;
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

Route::post('/store-turmas', [TurmasController::class, 'store'])->name('store-turmas');
























/*
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

    Route::get('settings/two-factor', TwoFactor::class)
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});

require __DIR__.'/auth.php';*/
