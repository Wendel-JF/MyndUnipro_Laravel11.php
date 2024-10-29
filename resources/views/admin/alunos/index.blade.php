<x-app-layout>
    <x-admin.menu header="Admin Dashboard"></x-admin.menu>>

    


    <div class="mainContainer">
 <h1 class="text-center">Lista de Alunos</h1>

    <!-- Campo de pesquisa -->
    <input type="text" wire:model="search" class="form-control mb-3" placeholder="Pesquisar Aluno...">

    <!-- Componente de tabela -->
    
    <div class="flex justify-start w-full">
    <a href="{{ route('admin.alunos.registrar') }}" class="btn bg-button text-gray-200">Adicionar Aluno</a>
</div>

    @livewire('tabela-alunos') 
    

</div>

</x-app-layout>

