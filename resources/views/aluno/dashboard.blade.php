<x-app-layout>
    <x-admin.menu>
        <x-slot:header>
            Aluno Dashboard
    </x-slot:header>  
    </x-admin.menu>>
                    <h1 class="dark:text-white">Aluno</h1>
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
                    {{ __("You're logged in!") }}
                   
               
    <footer class="py-16 text-center text-sm dark:text-white">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer>

</x-app-layout>
