<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     /*
     Table movies
        1. id: Auto increment, primary key.
        2. movie_title: String(100), required.
        3. duration: Integer (dalam menit), required → contoh: 120.
        4. release_date: Date, required.
        5. created_at, updated_at.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('movie_title', 100);
            $table->integer('duration');
            $table->date('release_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
