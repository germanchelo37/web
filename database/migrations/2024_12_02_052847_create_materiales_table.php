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
        Schema::create('materiales', function (Blueprint $table) {
            $table->id(); 
            $table->string('titulo'); 
            $table->string('subtitulo')->nullable();
            $table->string('isbn')->unique();
            $table->year('año_publicacion');
            $table->enum('estado', ['disponible', 'prestado', 'en_reparacion']);
            $table->string('tipo'); // Ej: libro, revista, etc.
            $table->integer('numero_paginas');
            $table->foreignId('autor_id')->constrained('autores');
            $table->foreignId('editorial_id')->constrained('editoriales');
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiales');
    }
};
