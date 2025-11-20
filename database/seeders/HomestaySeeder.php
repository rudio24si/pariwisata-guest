<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Warga; // Pastikan model Warga sudah di-import

class HomestaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Ambil semua ID warga yang ada untuk dijadikan pemilik
        $wargaIds = Warga::pluck('warga_id')->toArray();

        // Pastikan ada setidaknya satu warga sebelum melakukan seeding
        if (empty($wargaIds)) {
            echo "❌ Harap jalankan WargaSeeder terlebih dahulu atau pastikan tabel 'warga' memiliki data.\n";
            return;
        }

        // Data Homestay Dummy
        $homestays = [
            [
                'nama' => 'Villa Ceria Pegunungan',
                'pemilik_warga_id' => $wargaIds[array_rand($wargaIds)], // Pilih ID warga secara acak
                'alamat' => 'Jl. Bukit Indah No. 12',
                'rt' => '001',
                'rw' => '005',
                'fasilitas_json' => json_encode(['Wi-Fi Gratis', 'Dapur Bersama', 'Kolam Renang']),
                'harga_per_malam' => 550000.00,
                'status' => 'Tersedia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Rumah Singgah Pantai Senja',
                'pemilik_warga_id' => $wargaIds[array_rand($wargaIds)],
                'alamat' => 'Gg. Mawar Laut No. 45',
                'rt' => '003',
                'rw' => '001',
                'fasilitas_json' => json_encode(['Akses Pantai', 'AC', 'Peralatan Memasak']),
                'harga_per_malam' => 800000.00,
                'status' => 'Tersedia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Pondok Kayu Minimalis',
                'pemilik_warga_id' => $wargaIds[array_rand($wargaIds)],
                'alamat' => 'Komplek Griya Asri Blok A',
                'rt' => '002',
                'rw' => '004',
                'fasilitas_json' => json_encode(['Parkir Gratis', 'Air Panas']),
                'harga_per_malam' => 350000.00,
                'status' => 'Tersedia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Masukkan data ke tabel 'homestay'
        DB::table('homestay')->insert($homestays);

        echo "✅ " . count($homestays) . " Homestay berhasil ditambahkan.\n";
    }
}
