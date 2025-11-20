<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Homestay; // Pastikan model Homestay sudah di-import

class KamarHomestaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Ambil semua ID homestay yang ada
        $homestayIds = Homestay::pluck('homestay_id')->toArray();

        // Pastikan ada setidaknya satu homestay
        if (empty($homestayIds)) {
            echo "❌ Harap jalankan HomestaySeeder terlebih dahulu atau pastikan tabel 'homestay' memiliki data.\n";
            return;
        }

        $kamarData = [];
        $totalKamar = 0;

        // 2. Loop melalui setiap homestay ID dan buat beberapa kamar
        foreach ($homestayIds as $h_id) {
            // Buat 2 sampai 4 kamar untuk setiap homestay secara acak
            $jumlahKamar = rand(2, 4);
            $totalKamar += $jumlahKamar;

            for ($i = 1; $i <= $jumlahKamar; $i++) {
                $namaKamar = 'Kamar ' . $i . (rand(0, 1) ? ' Deluxe' : ' Standard');
                $kapasitas = rand(2, 4);
                $hargaDasar = (float)rand(100, 300) * 1000;

                $kamarData[] = [
                    'homestay_id' => $h_id,
                    'nama_kamar' => $namaKamar,
                    'kapasitas' => $kapasitas,
                    'fasilitas_json' => json_encode(['AC', 'Air Panas', 'TV Kabel']),
                    'harga' => $hargaDasar,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        // 3. Masukkan data ke tabel 'kamar_homestay'
        DB::table('kamar_homestay')->insert($kamarData);

        echo "✅ " . $totalKamar . " Kamar Homestay berhasil ditambahkan.\n";
    }
}
