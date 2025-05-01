<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('resultados_fases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('fase_id')->constrained()->onDelete('cascade');
            $table->integer('pontuacao')->default(0);
            $table->timestamps();

            $table->unique(['user_id', 'fase_id']); // Um resultado único por usuário/fase
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('resultados_fases');
    }
};
