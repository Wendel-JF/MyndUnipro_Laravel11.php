<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlunoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    
    public function rules(): array
    {
        

        return [
            
                'nome' => 'required|string',
                'email' => 'required|email|unique:alunos,email|string|lowercase|max:255',
                'matricula' => 'required|string|unique:alunos,matricula',
                'data_nascimento' => 'required|date',
                'curso' => 'required|string',
                'campus' => 'required|string',
                'sexo' => 'nullable|in:M,F,Outro',
                'telefone' => 'nullable|string|min:11|max:15',
           
    
        ];
    }
}
