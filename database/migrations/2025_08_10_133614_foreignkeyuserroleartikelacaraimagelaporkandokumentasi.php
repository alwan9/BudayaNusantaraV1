<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //hapus semua data di database
    public function up(): void
    {
        // 1️⃣ Change users.role to foreign key
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('role')->nullable()->default(2)->change();
            $table->foreign('role')->references('id')->on('roles')->nullOnDelete();
        });

        // 2️⃣ Change artikel.img to foreign key
        Schema::table('artikel', function (Blueprint $table) {
            $table->unsignedBigInteger('img')->nullable()->change();
            $table->foreign('img')->references('id')->on('images')->nullOnDelete();
        });

        // 3️⃣ Change acara.img to foreign key
        Schema::table('acara', function (Blueprint $table) {
            $table->unsignedBigInteger('img')->nullable()->change();
            $table->foreign('img')->references('id')->on('images')->nullOnDelete();
        });

        // 4️⃣ Change laporkan.img to foreign key to dokumentasi
        Schema::table('laporkan', function (Blueprint $table) {
            $table->unsignedBigInteger('dokumentasi')->nullable();
            $table->foreign('dokumentasi')->references('id')->on('dokumentasi')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('laporkan', function (Blueprint $table) {
            $table->dropForeign(['dokumentasi']);
        });

        Schema::table('acara', function (Blueprint $table) {
            $table->dropForeign(['img']);
        });

        Schema::table('artikel', function (Blueprint $table) {
            $table->dropForeign(['img']);
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role']);
        });
    }
};
