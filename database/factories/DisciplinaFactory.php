<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diciplina>
 */
class DisciplinaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->words(2, true),  // Ex: 'Cálculo Diferencial'
            'codigo' => strtoupper(Str::random(3)) . rand(100, 999),  // Ex: MAT101
            'carga_horaria' => $this->faker->randomElement([30, 60, 90]),  // Carga em horas
            'semestre' => $this->faker->numberBetween(1, 8),  // Entre 1º e 8º semestre
            'tipo' => $this->faker->randomElement(['Obrigatória', 'Optativa']),
            'departamento' => $this->faker->randomElement(['Matemática', 'Física', 'Computação', 'Biologia'])
        ];
    }
}
