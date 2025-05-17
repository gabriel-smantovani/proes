<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar_cabeca')->default('defaultcabeca.png')->after('moedas');
            $table->string('avatar_traje')->default('defaulttraje.png')->after('avatar_cabeca');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avatar_cabeca');
            $table->dropColumn('avatar_traje');
        });
    }
};
