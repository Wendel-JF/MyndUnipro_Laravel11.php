<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Aluno;
use Livewire\WithPagination;
use Livewire\Attributes\Url;

class TabelaAlunos extends Component
{
    
    use WithPagination;
    
    public $search = '';

    public function render()
    {    /* $alunos = Aluno::paginate(10); */
        $alunos = Aluno::search($this->search)->paginate(8);

    return view('livewire.tabela-alunos', [
        'alunos' => $alunos,
    ]);
    

    }
}
