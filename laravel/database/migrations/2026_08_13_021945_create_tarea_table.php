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
        Schema::create('tarea', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_categoria');
            $table->string('titulo');
            $table->text('descripcion');
            $table->enum('estado', ['pendiente', 'en_progreso', 'completada'])->default('pendiente');       
            
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_usuario', 'fk_tarea_usuario')->references('id')->on('usuario')->onDelete('cascade');
            $table->foreign('id_categoria', 'fk_tarea_categoria')->references('id')->on('categoria')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarea');
    }
};
