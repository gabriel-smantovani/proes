<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar_head')->default('defaulthead.png')->after('moedas');
            $table->string('avatar_top')->default('defaulttop.png')->after('avatar_head');
            $table->string('avatar_bottom')->default('defaultbottom.png')->after('avatar_top');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avatar_head');
            $table->dropColumn('avatar_top');
            $table->dropColumn('avatar_bottom');
        });
    }
};
