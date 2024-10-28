<?php

namespace App\Livewire;

use Livewire\Component;

class ProgressBar extends Component
{
    public $carregando = false;
    public $progresso = 0;

    public function executarAcao()
    {
        $this->carregando = true;
        $this->progresso = 0;

        // Simulando um processo que leva tempo
        for ($i = 0; $i <= 100; $i++) {
            $this->progresso = $i;
            usleep(50000); // Simula o tempo de processamento
        }

        $this->carregando = false;
    }

    public function render()
    {
        return view('livewire.progress-bar');
    }
}
