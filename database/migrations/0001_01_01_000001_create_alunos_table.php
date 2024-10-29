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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('email', 50)->unique();
            $table->string('matricula', 20)->unique(); // Número de matrícula
            $table->date('data_nascimento');
            $table->string('curso');
            $table->string('campus');
            $table->enum('sexo', ['M', 'F', 'Outro'])->nullable();
            $table->string('telefone', 15)->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
