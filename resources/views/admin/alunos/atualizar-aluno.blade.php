<x-app-layout>
    <x-admin.menu header="Admin Dashboard"></x-admin.menu>>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form class="formAlunos" action="{{ route('admin.alunos.atualizar.update', $aluno->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $aluno->nome }}" required>
            <x-input-error :messages="$errors->get('nome')" class="mt-2" />
        </div>

        <div>
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $aluno->email }}"
                required>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <label for="matricula" class="form-label">Matrícula</label>
            <input type="text" class="form-control" id="matricula" name="matricula" value="{{ $aluno->matricula }}"
                required>
            <x-input-error :messages="$errors->get('matricula')" class="mt-2" />
        </div>

        <div>
            <label for="curso" class="form-label">Curso</label>
            <input type="text" class="form-control" id="curso" name="curso" value="{{ $aluno->curso }}"
                required>
            <x-input-error :messages="$errors->get('curso')" class="mt-2" />
        </div>

        <div>
            <label for="campus" class="form-label">Campus</label>
            <input type="text" class="form-control" id="campus" name="campus" value="{{ $aluno->campus }}"
                required>
            <x-input-error :messages="$errors->get('campus')" class="mt-2" />
        </div>

        <div>
            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento"
                value="{{ $aluno->data_nascimento }}" required>
        </div>

        <div>
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" maxlength="11" name="telefone"
                value="{{ $aluno->telefone }}" required>
            <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
        </div>

        <div class="mb-3">
            <label for="sexo" class="form-label">Sexo</label>
            <select class="form-select" name="sexo" id="sexo">
                @if ($aluno->sexo == 'M')
                    <option value="M" selected>Masculino</option>
                    <option value="F">Feminino</option>
                    <option value="Outro">Outro</option>
                @endif
                @if ($aluno->sexo == 'F')
                    <option value="M">Masculino</option>
                    <option value="F" selected>Feminino</option>
                    <option value="Outro">Outro</option>
                @endif
                @if ($aluno->sexo == 'Outro')
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                    <option value="Outro" selected>Outro</option>
                @endif
            </select>
        </div>

        <button type="submit" class="btn btn-dark w-full">Atualizar</button>
    </form>


</x-app-layout>
