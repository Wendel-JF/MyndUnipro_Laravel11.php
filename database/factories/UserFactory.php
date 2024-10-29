<?php

namespace Database\Factories;

use App\Models\Aluno;
use App\Models\Professor;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Chama randomTypeUsers para adicionar o usuário correto ao retorno
        $userTypeData = $this->randomTypeUsers();

        return [
            'name' => $userTypeData['name'] ?? $this->faker->name(),
            'email' => $userTypeData['email'],
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'access_level' => $userTypeData['access_level'],
            'remember_token' => Str::random(10),
            'professor_id' => $userTypeData['professor_id'],
            'aluno_id' => $userTypeData['aluno_id'],
            
        ];
    }

    public function randomTypeUsers(): array
    {
        $randomNumber = rand(1, 2);
        $aluno = Aluno::inRandomOrder()->first();
        $professor = Professor::inRandomOrder()->first();

        do {
            $emailAluno = $aluno && !User::where('email', $aluno->email)->exists()
                ? $aluno->email
                : $this->faker->unique()->safeEmail();
        } while (User::where('email', $emailAluno)->exists());
      

        do {
            $emailProfessor = $professor && !User::where('email', $professor->email)->exists()
                ? $professor->email
                : $this->faker->unique()->safeEmail();
        } while (User::where('email', $professor->email)->exists());

        switch ($randomNumber) {
            case 1:
                
                return [
                   'access_level' => 1,
                    'aluno_id' => $aluno->id ,
                    'name' => $aluno ? $aluno->nome : null,
                    'email' => $emailAluno,
                    'professor_id' => null,
                ];
            case 2:
                return [
                    'access_level' => 2,
                    'professor_id' => $professor ? $professor->id : null,
                    'name' => $professor ? $professor->nome : null,
                    'email' => $emailProfessor,
                    'aluno_id' => null,
                ];
                break;
           
        }

        return [
            'professor_id' => null,
            'aluno_id' => null,
        ];
    }
    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
