<?php

namespace App\Http\Controllers\Aluno;
use App\Models\Aluno;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Routing\Controller;


class AlunoController extends Controller
{   
    public function show(Request $request): View
    {   
        $aluno = $request->user()->aluno;
        return view('aluno.dashboard', [
            'aluno' => $aluno,
        ]);
    }
}
