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
            $table->foreign('studentID')->references('students')->on('ID');
            $table->foreign('courseID')->references('courses')->on('ID');
            $table->string('period',6);
            $table->boolean('isCancel')->default(false);
            $table->float('grade')->default(0);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
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
