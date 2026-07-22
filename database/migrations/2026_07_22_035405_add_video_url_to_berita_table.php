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
        Schema::table('berita', function (Blueprint $table) {
            // Menambahkan kolom video_url, posisinya opsional (bisa disesuaikan)
            // nullable() digunakan agar tidak error jika ada berita tanpa video
            $table->string('video_url')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('berita', function (Blueprint $table) {
            // Menghapus kolom jika migration di-rollback
            $table->dropColumn('video_url');
        });
    }
};