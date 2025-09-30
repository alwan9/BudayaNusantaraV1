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
        Schema::create('acara', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->date('tanggal_mulai');//??
            $table->date('tanggal_akhir');//??
            $table->string('img')->nullable(); // optional image path
            $table->string('lokasi')->nullable(); // maps link or place
            $table->text('des_singkat')->nullable(); // short description
            $table->longText('detail_acara')->nullable(); // detailed content
            $table->integer('htm')->nullable(); // harga tiket masuk
            $table->string('no_panitia')->nullable(); // contact number
            $table->string('kategori')->nullable(); // category
            $table->string('asal')->nullable(); // general/provinsi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acara');
    }
};
