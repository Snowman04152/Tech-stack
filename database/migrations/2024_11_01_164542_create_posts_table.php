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
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('title'); // Kolom judul
            $table->text('description'); // Kolom deskripsi
            $table->date('published_at')->nullable(); // Kolom tanggal dibuat (dapat diisi null jika belum dipublikasikan)
            $table->string('image_path')->nullable(); // Kolom untuk menyimpan path gambar, null jika tidak ada gambar
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key ke tabel users
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
