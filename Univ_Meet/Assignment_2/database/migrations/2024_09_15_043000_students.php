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
            $table->string('nrp',9)->unique();
            $table->string('name');
            $table->date('dateOfBirth');
            $table->string('placeOfBirth');
            $table->text('address')->nullable();
            $table->string('phoneNumber');
            $table->boolean('isActive');
            $table->string('NIK',16)->unique();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->foreign('unitID')->references('units')->on('ID');

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
