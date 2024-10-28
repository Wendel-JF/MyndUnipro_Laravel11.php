<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    /** @use HasFactory<\Database\Factories\ProfessorFactory> */
    use HasFactory;

    protected $table = 'professores'; 

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function disciplinas()
    {
        return $this->hasMany(Disciplina::class);
    }
    
}
