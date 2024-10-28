<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::check()) { // Verifica se o usuário está autenticado
        // Obtém o nível de acesso do usuário
        $userLevel = Auth::user()->access_level;

        // Redireciona com base no nível de acesso
        switch ($userLevel) {
            case 1:
                return redirect()->route('aluno'); // Redireciona para Alunos
            case 2:
                return redirect()->route('professor'); // Redireciona para Professores
            case 3:
                return redirect()->route('admin'); // Redireciona para Admin
            default:
                return redirect()->route('login'); // Redireciona para Login se não houver correspondência
        }
    }

    return redirect()->route('login'); // Se não estiver autenticado, exibe a página de login
})->name('/'); // Nome da rota