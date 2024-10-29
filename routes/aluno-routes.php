<?php

use App\Http\Controllers\Aluno\AlunoController;
use Illuminate\Support\Facades\Route;

// Rota para a página de Alunos
Route::middleware(['auth', 'verified', 'level.access:1'])->group(function () {
    // Define a rota para mostrar o aluno com Route Model Binding
    Route::get('aluno', [AlunoController::class, 'show'])->name('aluno');
});