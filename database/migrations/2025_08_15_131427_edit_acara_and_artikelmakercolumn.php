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
        Schema::table('acara', function (Blueprint $table) {
            $table->foreignId('owner')
                  ->after('asal') // adjust position if needed
                  ->constrained('users')
                  ->cascadeOnDelete();
        });
        Schema::table('artikel', function (Blueprint $table) {
            $table->foreignId('owner')
                  ->constrained('users')
                  ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('acara', function (Blueprint $table) {
            $table->dropForeign(['owner']);
            $table->dropColumn('owner');
        });
        Schema::table('artikel', function (Blueprint $table) {
            $table->dropForeign(['owner']);
            $table->dropColumn('owner');
        });
    }
};
