<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('link_github')->after('avatar_bottom');
            $table->string('link_linkedin')->after('link_github');
            $table->string('instituicao_ensino')->after('link_linkedin');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('link_github');
            $table->dropColumn('link_linkedin');
            $table->dropColumn('instituicao_ensino');
        });
    }
};
