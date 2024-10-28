<?php

namespace Database\Factories;

use App\Models\Aluno;
use App\Models\Disciplina;
use App\Models\Professor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matricula>
 */
class MatriculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'aluno_id' => Aluno::inRandomOrder()->first()->id,
            'disciplina_id' => Disciplina::inRandomOrder()->first()->id,
            'professor_id' => Professor::inRandomOrder()->first()->id,
            'nota_final' => $this->faker->randomFloat(2, 1, 10),  // Nota entre 1 e 10
            'faltas' => $this->faker->numberBetween(0, 20),       
        ];
    }
}
