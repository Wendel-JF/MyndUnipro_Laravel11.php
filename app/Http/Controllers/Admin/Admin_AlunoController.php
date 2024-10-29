<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Http\Requests\StoreAlunoRequest;
use App\Http\Requests\UpdateAlunoRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Aluno;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class Admin_AlunoController extends Controller
{
    
     // Exibe a lista de alunos
    public function index()
    {
        $alunos = Aluno::paginate(10);
        return view('admin.alunos.index', compact('alunos'));
    }

    public function create()
    {
        return view('admin.alunos.registrar-aluno');
    }

    // Armazena um novo aluno
    public function store(StoreAlunoRequest $request)
    {
        /* $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]); */
        /* $aluno = Aluno::create($request->all()); */
        /* $aluno = Aluno::create($request->only(['nome', 'email', 'matricula', 'curso', 'campus',
        'sexo','data_nascimento', 'telefone']));
        
        $this->createUser($validated, $aluno); */
        $aluno = Aluno::create($request->all());
        
        $this->createUser($request, $aluno);
        return redirect()->route('admin.alunos.registrar')->with('success', 'Aluno criado com sucesso.');
    }

    public function createUser($data, Aluno $aluno)
{
    // Cria o usuário e associa com o aluno
    $user = User::create([
        'name' => $aluno->nome, // Usa o nome do aluno para o campo 'name'
        'email' => $aluno->email,
        'password' => Hash::make($data['password']),
        'aluno_id' => $aluno->id, // Relaciona o aluno pelo ID
        'access_level' => 1, // Define nível de acesso
    ]);

    // Dispara o evento de registro
    event(new Registered($user));
}

    // Exibe as informações de um aluno específico
    public function show(Aluno $aluno)
    {
        return view('admin.alunos.visualizar-aluno', compact('aluno'));
    }

    public function edit(Aluno $aluno)
    {   
        if (is_null($aluno->id)) {
            return redirect()->route('admin.alunos.index')
                             ->with('error', 'ID do aluno não fornecido.');
        }

        try {
            // Tente encontrar o aluno pelo ID
            Aluno::findOrFail($aluno->id);

            return view('admin.alunos.atualizar-aluno', compact('aluno'));
        } catch (ModelNotFoundException $e) {
            // Se o aluno não for encontrado, redirecione para outra rota
            return redirect()->route('admin.alunos.index') // ou qualquer rota que você desejar
                             ->with('error', 'Aluno não encontrado.');
        }
    }

    // Atualiza as informações de um aluno específico
    /* dd($aluno); */
    public function update(UpdateAlunoRequest $request, Aluno $aluno)
    {
            // Se encontrado, atualize os dados
            $aluno->update($request->validated());
    
            return redirect()->route('admin.alunos.atualizar', $aluno->id)
                             ->with('success', 'Aluno atualizado com sucesso.');
        
        /* dd($request->validated()); */
    }

    // Remove um aluno específico
    public function destroy(Aluno $aluno)
    {
        $aluno->delete();
        return redirect()->route('admin.alunos.index')->with('success', 'Aluno removido com sucesso.');
    }

}
