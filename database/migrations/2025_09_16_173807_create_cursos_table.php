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
            Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150);
            $table->string('categoria', 50);
            $table->string('codigo', 50)->unique();
            $table->text('descripcion')->nullable();
            $table->integer('duracion')->nullable(); // en horas
            $table->string('nivel', 50)->default('Básico');
            $table->decimal('precio', 8, 2)->default(0);
            $table->enum('estado', ['activo', 'inactivo'])->default('activo');
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
