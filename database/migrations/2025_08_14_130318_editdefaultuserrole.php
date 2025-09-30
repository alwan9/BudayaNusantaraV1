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
        Schema::table('users', function (Blueprint $table) {
            // Drop old foreign key first
            $table->dropForeign(['role']);
        });

        Schema::table('users', function (Blueprint $table) {
            // Change the column
            $table->unsignedBigInteger('role')->default(3)->nullable(false)->change();
            // Recreate the FK with CASCADE or RESTRICT
            $table->foreign('role')->references('id')->on('roles')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Change back the default to NULL (or previous value, adjust if needed)
            $table->integer('role')->default(null)->change();
        });
    }
};

