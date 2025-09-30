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
        Schema::create('laporkan', function (Blueprint $table) {
            $table->id();
            $table->string('judul_acara');
            $table->date('tanggal');
            $table->foreignId('user_acara_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('user_pelapor_id')->constrained('users')->onDelete('cascade');
            $table->text('keterangan')->nullable();
            $table->string('jenis_keluhan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporkan');
    }
};
