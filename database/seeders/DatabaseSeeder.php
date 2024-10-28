<?php

namespace Database\Seeders;

use App\Models\Aluno;
use App\Models\Disciplina;
use App\Models\Matricula;
use App\Models\Professor;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (!Aluno::where('email', 'aluno@gmail.com')->first()) {





            Aluno::factory()->count(30)->create();

            Professor::factory()->count(30)->create();

            Disciplina::factory()->count(13)->create();

            Matricula::factory()->count(20)->create();


            if (!User::where('email', 'master@mode.com')->first()) {

                User::factory()->create([
                    'name' => "Admin",
                    'email' => 'master@mode.com',
                    'password' => Hash::make('admin123', ['rounds' => 12]),
                    'remember_token' => Str::random(10),
                    'access_level' => 3,
                    'aluno_id' => null,
                    'professor_id' => null,
                ]);
                User::factory()->create([
                    'name' => "Aluno",
                    'email' => 'aluno@gmail.com',
                    'password' => Hash::make('aluno123', ['rounds' => 12]),
                    'remember_token' => Str::random(10),
                    'access_level' => 1,
                    'aluno_id' => 1,
                    'professor_id' => null,
                ]);
            }

            User::factory()->create([
                'name' => "Professor",
                'email' => 'professor@gmail.com',
                'password' => Hash::make('professor123', ['rounds' => 12]),
                'remember_token' => Str::random(10),
                'access_level' => 2,
                'aluno_id' => null,
                'professor_id' => 1,
            ]);
        }

        User::factory(5)->create();
    }
}
