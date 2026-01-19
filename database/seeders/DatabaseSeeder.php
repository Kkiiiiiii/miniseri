<?php

namespace Database\Seeders;

use App\Models\Gambar;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Gambar::create([
            'image' => 'gambar/background1.jpg',
            'judul' => 'Northwood',
            'episode' => '59',
            'rilis' => '1999-12-02',
            'genre' => 'Aksi',
        ]);


        Gambar::create([
            'image' => 'gambar/background2.jpg',
            'judul' => 'Detektif Cilik',
            'episode' => '100',
            'rilis' => '2000-01-02',
            'genre' => 'Aksi',
        ]);


        Gambar::create([
            'image' => 'gambar/background3.jpg',
            'judul' => '69',
            'episode' => '10',
            'rilis' => '2025-02-05',
            'genre' => 'Comedy',
        ]);


    }
}
