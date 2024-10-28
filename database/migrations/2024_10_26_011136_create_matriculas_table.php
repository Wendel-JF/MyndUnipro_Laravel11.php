<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aluno_id')->constrained('alunos')->onDelete('cascade')->nullable();
            $table->foreignId('disciplina_id')->constrained('disciplinas')->onDelete('cascade');
            $table->foreignId('professor_id')->constrained('professores')->onDelete('cascade')->nullable();
            $table->float('nota_final')->nullable();  // Nota do aluno
            $table->integer('faltas')->default(0);     // Número de faltas
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriculas');
    }
};
