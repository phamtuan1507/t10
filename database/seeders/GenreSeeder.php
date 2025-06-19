<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create(['name' => 'Hành động']);
        Genre::create(['name' => 'Tình cảm']);
        Genre::create(['name' => 'Kinh dị']);
    }
}
