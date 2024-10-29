<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alunos>
 */
class AlunoFactory extends Factory
{
    protected static ?string $password;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'nome' => $this->faker->name(),
                'email' => $this->faker->unique()->safeEmail(),
                'matricula' => strtoupper(Str::random(8)), // Gera uma matrícula aleatória
                'data_nascimento' => $this->faker->date('Y-m-d', '2003-01-01'), // Alunos até 20 anos
                'curso' => $this->faker->randomElement(['Engenharia', 'Medicina', 'Direito', 'Ciencia da Computaçao'
                ,'Analise e Desenvolvimento de Sistemas']),
                'campus' =>$this->faker->randomElement(['Fortaleza', 'Recife']),
                'sexo' => $this->faker->randomElement(['M', 'F', 'Outro']),
                'telefone' => $this->faker->regexify('([1-9]){2} 9[0-9]{4}-[0-9]{4}'),
        ];
    }
}
