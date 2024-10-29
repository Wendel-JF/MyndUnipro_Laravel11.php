<?php 
use App\Http\Controllers\Admin\Admin_AlunoController;
use Illuminate\Support\Facades\Route;

// Rota para a página de Admin
Route::middleware(['auth', 'verified', 'level.access:3'])->group(function () {
    Route::get('admin', function () {
        return view('admin.dashboard');
    })->name('admin');
});


Route::middleware(['auth', 'level.access:3']) // Middleware como array
->prefix('admin')
->name('admin.')
->group(function () {
    
    Route::get('alunos', [Admin_AlunoController::class, 'index'])->name('alunos.index');  // Listar alunos
    
    Route::get('alunos/registrar', [Admin_AlunoController::class, 'create'])->name('alunos.registrar');  // Formulário de criação
    
    Route::post('alunos/registrar/store',[Admin_AlunoController::class, 'store'])->name('alunos.registrar.store');  // Salvar aluno
    
    Route::get('alunos/visualizar/{aluno}', [Admin_AlunoController::class, 'show'])->name('alunos.visualizar');  // Exibir detalhes
    
    Route::get('alunos/atualizar/{aluno}', [Admin_AlunoController::class, 'edit'])->name('alunos.atualizar');  // Formulário de edição
    
    Route::put('alunos/atualizar/update/{aluno}', [Admin_AlunoController::class, 'update'])->name('alunos.atualizar.update');   // Atualizar aluno
    Route::delete('alunos/{aluno}', [Admin_AlunoController::class, 'destroy'])->name('alunos.excluir');  // Excluir aluno
});
