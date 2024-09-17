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
        Schema::create('courses', function (Blueprint $table) {
            $table->id('ID');
            $table->string('courseCode', length: 6)->unique();
            $table->year('curriculumYear');
            $table->string('courseName');
            $table->string('courseNameEN');
            $table->tinyInteger('creditUnit');
            $table->unsignedBigInteger('units_ID');
            $table->foreign('units_ID')->references('ID')->on('units');
            $table->boolean('isActive')->default(true);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
