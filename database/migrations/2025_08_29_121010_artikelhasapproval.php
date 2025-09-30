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
        Schema::create('artikel_approvals', function (Blueprint $table) {
            $table->id();

            // Relasi ke tabel artikel
            $table->unsignedBigInteger('artikel_id');
            $table->foreign('artikel_id')
                  ->references('id')
                  ->on('artikel') // jika tabelmu bernama 'artikel', ubah ke 'artikel'
                  ->onDelete('cascade');

            // Status persetujuan
            $table->boolean('approve')->default(false);

            // Admin yang menyetujui
            $table->unsignedBigInteger('approved_by')->nullable();
            $table->foreign('approved_by')
                  ->references('id')
                  ->on('users')
                  ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikel_approvals');
    }
};
