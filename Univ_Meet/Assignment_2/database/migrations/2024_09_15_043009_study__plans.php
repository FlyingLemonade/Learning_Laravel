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
        Schema::create('plans', function (Blueprint $table) {
            $table->id('ID');
            $table->unsignedBigInteger('students_id');
            $table->unsignedBigInteger('courses_id');
            $table->foreign('students_ID')->references('ID')->on('students');
            $table->foreign('courses_ID')->references('ID')->on('courses');
            $table->string('period', 6);
            $table->boolean('isCancel')->default(false);
            $table->float('grade')->default(0);
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
