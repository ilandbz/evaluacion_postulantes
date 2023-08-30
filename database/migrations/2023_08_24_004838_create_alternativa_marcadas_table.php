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
        Schema::create('alternativa_marcadas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('examen_postulante_id')->constrained('examen_postulantes')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('pregunta');
            $table->string('respuesta');
            $table->string('marco')->default('NINGUNO');
            $table->integer('puntos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alternativa_marcadas');
    }
};
