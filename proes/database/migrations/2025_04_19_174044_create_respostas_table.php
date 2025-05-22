<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('respostas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pergunta_id')->constrained()->onDelete('cascade');
            $table->string('desc', 300);
            $table->boolean('correta');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('respostas');
    }
};
