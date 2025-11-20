<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Budi Santoso',
                'email' => 'budi@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Siti Rahma',
                'email' => 'siti@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Andi Pratama',
                'email' => 'andi@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Rina Aulia',
                'email' => 'rina@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Joko Saputra',
                'email' => 'joko@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Dewi Anggraini',
                'email' => 'dewi@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Fajar Nugroho',
                'email' => 'fajar@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Lina Kartika',
                'email' => 'lina@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Rudi Hartono',
                'email' => 'rudi@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Maya Sari',
                'email' => 'maya@example.com',
                'password' => Hash::make('password'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
