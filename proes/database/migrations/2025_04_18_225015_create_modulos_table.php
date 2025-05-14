<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('modulos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('desc');
            $table->string('img_link');
            $table->unsignedBigInteger('conquista_necessaria_id')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('modulo');
    }
};
