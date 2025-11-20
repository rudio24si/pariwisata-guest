<?php

// database/migrations/YYYY_MM_DD_HHMMSS_create_booking_homestay_table.php

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
        Schema::create('booking_homestay', function (Blueprint $table) {
            // Primary Key
            $table->id('booking_id');

            // Foreign Keys (FK)
            $table->unsignedBigInteger('kamar_id'); // Merujuk ke KamarHomestay
            $table->unsignedBigInteger('warga_id'); // Merujuk ke Warga (Penyewa/yang booking)

            // Kolom Data Booking
            $table->dateTime('checkin');
            $table->dateTime('checkout');
            $table->string('metode_bayar', 50);
            $table->decimal('total', 10, 2);

            $table->enum('status', ['Menunggu Pembayaran', 'Terbayar', 'Selesai', 'Dibatalkan'])->default('Menunggu Pembayaran');

            $table->timestamps();

            // Definisikan Foreign Key Constraints
            $table->foreign('kamar_id')
                ->references('kamar_id')
                ->on('kamar_homestay')
                ->onDelete('restrict'); // Tidak boleh dihapus jika masih ada booking

            $table->foreign('warga_id')
                ->references('warga_id')
                ->on('warga')
                ->onDelete('restrict'); // Tidak boleh dihapus jika masih ada booking
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_homestay');
    }
};
