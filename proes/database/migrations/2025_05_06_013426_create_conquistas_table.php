<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('conquistas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('descricao', 70);
            $table->string('desc_alcancada', 70);
            $table->string('imagem');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('conquistas');
    }
};
