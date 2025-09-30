<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     public function up(): void
    {
        Schema::table('laporkan', function (Blueprint $table) {
            // Drop the old column if it exists
            if (Schema::hasColumn('laporkan', 'judul_acara')) {
                $table->dropColumn('judul_acara');
            }

            // Add acara_id column
            $table->unsignedBigInteger('acara_id')->after('id');

            // Add foreign key constraint
            $table->foreign('acara_id')
                ->references('id')
                ->on('acara')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('laporkan', function (Blueprint $table) {
            // Drop foreign key first
            $table->dropForeign(['acara_id']);

            // Drop acara_id column
            $table->dropColumn('acara_id');

            // Restore judul_acara column
            $table->string('judul_acara')->after('id');
        });
    }
};