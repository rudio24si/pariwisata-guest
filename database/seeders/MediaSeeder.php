<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('media')->insert([
            [
                'ref_table' => 'homestay',   // tabel tujuan
                'ref_id' => 1,            // ID homestay yang ingin diberi foto
                'file_url' => '/mnt/data/145305ae-dd52-4e34-b311-2ea2a6697a293.png',
                'caption' => 'contoh foto homestay',
                'mime_type' => 'image/png',
                'sort_order' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
