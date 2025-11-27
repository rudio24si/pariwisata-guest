<?php

namespace Database\Seeders;

use App\Models\Warga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // Daftar nilai ENUM dan Varchar yang mungkin
        $jenis_kelamin_options = ['Laki-laki', 'Perempuan'];
        $agama_options = ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu'];
        $pekerjaan_options = ['Wiraswasta', 'PNS', 'Karyawan Swasta', 'Petani', 'Guru', 'Pemandu Wisata'];
        $bahasa_options = ['Indonesia', 'Inggris', 'Jawa', 'Sunda', 'Jerman'];
        $status_options = ['Aktif', 'Tidak Aktif'];

        // Buat 100 Data Dummy
        for ($i = 0; $i < 100; $i++) {
            // Tentukan jenis kelamin untuk konsistensi nama
            $gender = $faker->randomElement(['male', 'female']);

            Warga::create([
                // warga_id (Diasumsikan Auto-Increment jika tidak ada kolom id standard)
                // Jika warga_id adalah Primary Key Auto-Increment, jangan isi.
                // Jika itu adalah kolom biasa, Anda mungkin perlu mengisi dengan logic kustom.
                // Untuk contoh ini, kita biarkan kosong jika itu auto-increment/PK.

                // no_ktp: 16 digit angka
                'no_ktp' => $faker->unique()->numerify('################'), 
                
                // nama
                'nama' => $faker->name($gender), 
                
                // jenis_kelamin
                'jenis_kelamin' => $faker->randomElement($jenis_kelamin_options), 
                
                // agama
                'agama' => $faker->randomElement($agama_options), 
                
                // pekerjaan
                'pekerjaan' => $faker->randomElement($pekerjaan_options), 
                
                // telp
                'telp' => $faker->phoneNumber(), 
                
                // email
                'email' => $faker->unique()->safeEmail(), 
                
                // foto (Dummy URL)
                'foto' => 'https://via.placeholder.com/255x255?text=' . urlencode(substr($faker->lastName(), 0, 2)),
                
                // deskripsi
                'deskripsi' => $faker->paragraph(2), // 2 paragraf deskripsi
                
                // pengalaman (Dummy Teks)
                'pengalaman' => $faker->sentence(10), 
                
                // bahasa
                'bahasa' => $faker->randomElement($bahasa_options), 
                
                // status
                'status' => $faker->randomElement($status_options), 
                
                // created_at & updated_at akan diisi otomatis
            ]);
        }
    }
}
