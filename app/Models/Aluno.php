<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    /** @use HasFactory<\Database\Factories\AlunosFactory> */
    use HasFactory;
    protected $fillable = [
        'nome', 'email', 'matricula', 'data_nascimento', 
        'curso', 'campus','sexo', 'telefone'
    ];

    public function setTelefoneAttribute($value)
    {
        // Remove caracteres não numéricos e reformata para '99 99999-9999'
        $numeros = preg_replace('/\D/', '', $value); // Remove tudo que não é número
        
        if (strlen($numeros) === 11) {
            $this->attributes['telefone'] = preg_replace(
                '/(\d{2})(\d{5})(\d{4})/', 
                '$1 $2-$3', 
                $numeros
            );
        } else {
            // Caso o telefone não tenha 11 dígitos, salva o valor original
            $this->attributes['telefone'] = $value;
        }
    }

    // Se você tiver um método para validar os status do sexo

    public static function search($term)
    {
        return static::where('nome', 'like', '%' . $term . '%');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
    
    public function disciplinas()
    {
        return $this->belongsToMany(Disciplina::class, 'matriculas')
                    ->withPivot('nota_final', 'faltas', 'professor_id')
                    ->withTimestamps();
    }
}
