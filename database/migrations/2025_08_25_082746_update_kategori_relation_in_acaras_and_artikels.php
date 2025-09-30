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
        Schema::table('acara_and_artikel', function (Blueprint $table) {
            Schema::table('acara', function (Blueprint $table) {
                // Drop old kategori column if exists
                if (Schema::hasColumn('acara', 'kategori')) {
                    $table->dropColumn('kategori');
                }

                // Add kategori_id foreign key
                $table->foreignId('kategori_id')
                    ->nullable()
                    ->constrained('kategori') // related to kategoris table
                    ->nullOnDelete();
            });

            // Update artikel table
            Schema::table('artikel', function (Blueprint $table) {
                // Drop old kategori column if exists
                if (Schema::hasColumn('artikel', 'kategori')) {
                    $table->dropColumn('kategori');
                }

                // Add kategori_id foreign key
                $table->foreignId('kategori_id')
                    ->nullable()
                    ->constrained('kategori')
                    ->nullOnDelete();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('acara', function (Blueprint $table) {
            // Rollback kategori_id
            if (Schema::hasColumn('acara', 'kategori_id')) {
                $table->dropForeign(['kategori_id']);
                $table->dropColumn('kategori_id');
            }

            // Restore old kategori column
            $table->string('kategori')->nullable();
        });

        Schema::table('artikel', function (Blueprint $table) {
            if (Schema::hasColumn('artikel', 'kategori_id')) {
                $table->dropForeign(['kategori_id']);
                $table->dropColumn('kategori_id');
            }

            $table->string('kategori')->nullable();
        });
    }
};
