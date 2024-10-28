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
        Schema::create('disciplinas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('codigo')->unique();  // Ex: MAT101
            $table->integer('carga_horaria');    // Em horas
            $table->integer('semestre');         // Ex: 1 para 1º semestre
            $table->enum('tipo', ['Obrigatória', 'Optativa']);
            $table->string('departamento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diciplinas');
    }
};
