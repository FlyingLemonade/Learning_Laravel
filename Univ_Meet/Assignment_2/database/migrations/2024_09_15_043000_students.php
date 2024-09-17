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
        Schema::create('students', function (Blueprint $table) {
            $table->id('ID');
            $table->string('nrp', 9)->unique();
            $table->string('name');
            $table->date('dateOfBirth');
            $table->string('placeOfBirth');
            $table->text('address')->nullable();
            $table->string('phoneNumber');
            $table->boolean('isActive');
            $table->string('NIK', 16)->unique();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->unsignedBigInteger('units_ID');
            $table->foreign('units_ID')->references('ID')->on('units');
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
