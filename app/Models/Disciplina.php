<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    /** @use HasFactory<\Database\Factories\DiciplinaFactory> */
    use HasFactory;

    public function alunos()
    {
        return $this->belongsToMany(Aluno::class, 'matriculas')
                    ->withPivot('nota_final', 'faltas', 'professor_id')
                    ->withTimestamps();
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }
}
