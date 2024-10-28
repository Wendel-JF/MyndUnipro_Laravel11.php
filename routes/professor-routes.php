<?php

use App\Http\Controllers\Aluno\AlunoController;
use Illuminate\Support\Facades\Route;

// Rota para a página de Professores
Route::middleware(['auth', 'verified', 'level.access:2'])->group(function () {
    Route::get('professor', function () {
        return view('professor.dashboard');
    })->name('professor');
});