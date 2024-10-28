<?php

namespace Database\Factories;

use App\Models\Professor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Utils\CpfGenerator;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Professor>
 */
class ProfessorFactory extends Factory
{
    protected static ?string $password;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     */
    protected $model = Professor::class;
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'cpf' => CpfGenerator::gerarCpfValido(), 
            'titulação' => $this->faker->randomElement(['Graduado', 'Mestre', 'Doutor', 'PhD']),
            'departamento' => $this->faker->randomElement(['Matemática', 'Física', 'Computação', 'Biologia']),
            'data_contratacao' => $this->faker->date('Y-m-d', '2023-12-31'),
            'telefone' => $this->faker->optional()->phoneNumber(),
        ];
    }
}
