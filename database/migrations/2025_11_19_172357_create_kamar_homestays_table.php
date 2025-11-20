<?php

// database/migrations/YYYY_MM_DD_HHMMSS_create_kamar_homestay_table.php

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
        Schema::create('kamar_homestay', function (Blueprint $table) {
            // Primary Key
            $table->id('kamar_id');

            // Foreign Key (FK) ke tabel 'homestay'
            $table->unsignedBigInteger('homestay_id');

            // Kolom Data Kamar
            $table->string('nama_kamar', 100);
            $table->unsignedSmallInteger('kapasitas')->comment('Jumlah maksimal orang');
            $table->json('fasilitas_json')->nullable();

            // Kolom Harga (DECIMAL)
            $table->decimal('harga', 10, 2);

            $table->timestamps();

            // Definisikan Foreign Key Constraint
            $table->foreign('homestay_id')
                ->references('homestay_id')
                ->on('homestay')
                ->onDelete('cascade'); // Jika homestay dihapus, semua kamar ikut terhapus
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamar_homestay');
    }
};
