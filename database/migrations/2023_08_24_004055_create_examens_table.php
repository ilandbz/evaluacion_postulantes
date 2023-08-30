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
        Schema::create('examens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cargo_id')->constrained('cargos')->onDelete('cascade')->onUpdate('cascade');
            $table->string('titulo');
            $table->date('fecha');
            $table->time('hora_inicio');//intervalo entre que horas pueden rendir el examen
            $table->time('hora_fin');
            $table->integer('duracion');//minutos
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examens');
    }
};
