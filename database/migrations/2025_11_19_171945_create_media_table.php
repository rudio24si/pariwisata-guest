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
        Schema::create('media', function (Blueprint $table) {
            // Kolom Primary Key (PK)
            $table->id('media_id');

            // Kolom untuk Relasi Polimorfik
            // $table->morphs('mediable'); // Alternatif lebih singkat di Laravel
            $table->string('ref_table', 50)->comment('Nama tabel pemilik media, cth: homestay');
            $table->unsignedBigInteger('ref_id')->comment('ID dari baris pemilik media');

            // Kolom Data File
            $table->string('file_url');
            $table->string('caption', 255)->nullable();
            $table->string('mime_type', 50);

            $table->unsignedSmallInteger('sort_order')->default(0);

            $table->timestamps();

            // Tambahkan index untuk mempercepat query relasi polimorfik
            $table->index(['ref_table', 'ref_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
