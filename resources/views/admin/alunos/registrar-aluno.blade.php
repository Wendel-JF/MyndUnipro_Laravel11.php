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

    <a href="{{ route('admin.alunos.index') }}" class="btn dark:text-white dark:bg-grey-200">Voltar</a>
    <form class="formAlunos" action="{{ route('admin.alunos.registrar.store') }}" method="POST">
        @csrf
        <h1 class="block w-full font-bold text-center">Cadastrar Aluno</h1>
        <div >
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
            <x-input-error :messages="$errors->get('nome')" class="mt-2" />
        </div>

        <div >
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div >
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" name="password" required>
            
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label class="dark:text-black" for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block bg-white w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div >
            <label for="matricula" class="form-label">Matrícula</label>
            <input type="text" class="form-control" id="matricula" name="matricula" required>
            <x-input-error :messages="$errors->get('matricula')" class="mt-2" />
        </div>

        <div >
            <label for="curso" class="form-label">Curso</label>
            <input type="text" class="form-control" id="curso" name="curso" required>
            <x-input-error :messages="$errors->get('curso')" class="mt-2" />
        </div>

        <div >
            <label for="campus" class="form-label">Campus</label>
            <input type="text" class="form-control" id="campus" name="campus" required>
            <x-input-error :messages="$errors->get('campus')" class="mt-2" />
        </div>

        

        <div>
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" maxlength="11" name="telefone" required>
            <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
        </div>

        <div >
            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
        </div>

        <div >
            <label for="sexo" class="form-label">Sexo</label>
            <select class="form-select" name="sexo" id="sexo">
                <option value="M" selected>Masculino</option>
                <option value="F">Feminino</option>
                <option value="Outro">Outro</option>
            </select>
        </div>
        <button type="submit" class="btn btn-dark w-full inline-block">Cadastrar</button>
    </form>

</x-app-layout>
