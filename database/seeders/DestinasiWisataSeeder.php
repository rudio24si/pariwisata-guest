<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\DestinasiWisata; // Pastikan Anda meng-import Model Destinasi

class DestinasiWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Inisialisasi Faker dengan Locale Indonesia
        $faker = Faker::create('id_ID');

        // Daftar nama destinasi wisata dummy
        $destinations = [
            'Pantai Indah Kencana',
            'Air Terjun Tujuh Bidadari',
            'Taman Bunga Nusantara',
            'Puncak Gunung Merapi Kecil',
            'Danau Biru Permai',
            'Candi Kuno Majapahit',
            'Hutan Pinus Sejuk',
            'Kebun Teh Hijau',
            'Desa Wisata Budaya',
            'Museum Sejarah Lokal'
        ];

        // Buat 100 Data Dummy
        for ($i = 0; $i < 100; $i++) {
            // Tentukan nama destinasi secara acak
            $namaDestinasi = $faker->randomElement($destinations) . ' ke-' . ($i + 1);

            // Tentukan harga tiket (DECIMAL)
            $hargaTiket = $faker->randomFloat(2, 10000, 150000); // Harga antara 10.000 hingga 150.000

            DestinasiWisata::create([
                // nama
                'nama' => $namaDestinasi,

                // deskripsi
                'deskripsi' => 'Selamat datang di ' . $namaDestinasi . '. ' . $faker->paragraph(3),

                // alamat (Menggunakan address() faker karena sudah disesuaikan ID)
                'alamat' => $faker->address(),

                // rt & rw (Angka dummy)
                'rt' => $faker->randomNumber(2, true), // 2 digit
                'rw' => $faker->randomNumber(2, true), // 2 digit

                // jam_buka
                'jam_buka' => $faker->randomElement(['08:00 - 17:00', 'Buka 24 Jam', '09:00 - 16:00']),

                // tiket (DECIMAL)
                'tiket' => $hargaTiket,
                
                // kontak
                'kontak' => $faker->phoneNumber(),

                // gambar (Dummy URL Placeholder)
                'gambar' => 'images/destinasi/' . $faker->slug() . '.jpg',

                // created_at & updated_at akan diisi otomatis
            ]);
        }
    }
}