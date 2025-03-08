<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('game_user', function (Blueprint $table) {
            $table->foreignId('game_id');
            $table->foreignId('user_id');
            $table->boolean('is_owner')->default(false);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('game_user');
    }
};
