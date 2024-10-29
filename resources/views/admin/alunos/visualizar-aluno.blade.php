<x-app-layout>
    <x-admin.menu header="Admin Dashboard"></x-admin.menu>>
<div class="mainContainer" >
<h1>Detalhes do Aluno</h1>
<a href="{{ route('admin.alunos.index') }}" class="btn btn-secondary">Voltar</a>
<table class="table">
    <tr>
        <th>Nome:</th>
        <td>{{ $aluno->nome }}</td>
    </tr>
    <tr>
        <th>E-mail:</th>
        <td>{{ $aluno->email }}</td>
    </tr>
    <tr>
        <th>Matrícula:</th>
        <td>{{ $aluno->matricula }}</td>
    </tr>
    <tr>
        <th>Data de Nascimento:</th>
        <td>{{ $aluno->data_nascimento }}</td>
    </tr>
</table>
</div>

</x-app-layout>;
