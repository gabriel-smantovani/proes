<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('avatares', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('imagem');
            $table->integer('preco')->default(1);
            $table->string('equipado_em');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('avatares');
    }
};