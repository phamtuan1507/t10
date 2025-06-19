<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MovieDirector;

class MovieDirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MovieDirector::create(['movie_id' => 1, 'director_id' => 3]); // Phim Hành Động - Christopher Nolan
        MovieDirector::create(['movie_id' => 2, 'director_id' => 1]); // Phim Tình Cảm - Trần Anh Hùng
    }
}
