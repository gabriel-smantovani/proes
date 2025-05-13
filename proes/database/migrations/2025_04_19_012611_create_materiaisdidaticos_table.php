<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('materiais_didaticos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('modulo_id')->constrained()->onDelete('cascade');
            $table->string('titulo');
            $table->string('caminho');
            $table->string('tipo_de_arquivo');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('materiais_didaticos');
    }
};
