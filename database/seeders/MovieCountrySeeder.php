<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MovieCountry;

class MovieCountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MovieCountry::create(['movie_id' => 1, 'country_id' => 3]); // Phim Hành Động - Mỹ
        MovieCountry::create(['movie_id' => 2, 'country_id' => 1]); // Phim Tình Cảm - Việt Nam
    }
}
