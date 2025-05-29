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
        // database/migrations/xxxx_xx_xx_create_google_meets_table.php
        Schema::create('google_meets', function (Blueprint $table) {
            $table->id();
            $table->string('link')->unique();
            $table->boolean('is_occupied')->default(false); // untuk tahu apakah link ini sedang dipakai
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('google_meets');
    }
};
