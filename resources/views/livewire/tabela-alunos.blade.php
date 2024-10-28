

    <div>
    <table class="table bg-white dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Matricula</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alunos as $aluno)
            <tr>
                <td>{{ $aluno->nome }}</td>
                <td>{{ $aluno->email }}</td>
                <td>{{ $aluno->matricula }}</td>
                <td>
                    <a href="{{ route('admin.alunos.visualizar', $aluno) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('admin.alunos.atualizar', $aluno) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('admin.alunos.excluir', $aluno) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $alunos->links() }} <!-- Paginacao -->
</div>
