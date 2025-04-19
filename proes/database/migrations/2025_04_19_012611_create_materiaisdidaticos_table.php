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
        Schema::create('materiaisdidaticos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('modulo_id')->constrained()->onDelete('cascade');
            $table->string('titulo');
            $table->boolean('ja_visto');
            $table->string('link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiaisdidaticos');
    }
};
