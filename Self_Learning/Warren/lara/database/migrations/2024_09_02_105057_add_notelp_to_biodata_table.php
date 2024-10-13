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
        Schema::table('biodata', function (Blueprint $table) {
            $table->string('notelp', 15)->nullable()->after('alamat');
        });
        // Schema::table('your_table_name', function (Blueprint $table) {
        //     $table->unsignedBigInteger('foreign_key_column'); // Add the new column
        //     $table->foreign('foreign_key_column')->references('id')->on('other_table')->onDelete('cascade'); // Add the foreign key constraint
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('biodata', function (Blueprint $table) {
            //
        });
    }
};
