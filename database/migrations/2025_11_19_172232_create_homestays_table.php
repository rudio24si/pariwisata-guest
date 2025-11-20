<?php

// database/migrations/YYYY_MM_DD_HHMMSS_create_homestay_table.php

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
        Schema::create('homestay', function (Blueprint $table) {
            // Kolom Primary Key (PK)
            $table->id('homestay_id');

            // Kolom Foreign Key (FK) ke tabel 'warga'
            $table->unsignedBigInteger('pemilik_warga_id');

            // Kolom Data Homestay
            $table->string('nama', 150);
            $table->string('alamat', 255);
            $table->string('rt', 3);
            $table->string('rw', 3);
            $table->json('fasilitas_json')->nullable(); // Untuk menyimpan data fasilitas dalam format JSON

            // Kolom Harga (DECIMAL)
            // Menggunakan 10 digit total, dengan 2 digit di belakang koma (cth: 999.999.99)
            $table->decimal('harga_per_malam', 10, 2);

            $table->enum('status', ['Tersedia', 'Tidak Tersedia', 'Draft'])->default('Draft');

            $table->timestamps();

            // Definisikan Foreign Key Constraint
            $table->foreign('pemilik_warga_id')
                ->references('warga_id')
                ->on('warga')
                ->onDelete('cascade'); // Jika warga dihapus, homestay ikut terhapus
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homestay');
    }
};
