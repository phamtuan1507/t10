<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MovieGenre;

class MovieGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MovieGenre::create(['movie_id' => 1, 'genre_id' => 1]); // Phim Hành Động - Hành động
        MovieGenre::create(['movie_id' => 2, 'genre_id' => 2]); // Phim Tình Cảm - Tình cảm
    }
}
