<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MovieActor;

class MovieActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MovieActor::create(['movie_id' => 1, 'actor_id' => 3]); // Phim Hành Động - Tom Cruise
        MovieActor::create(['movie_id' => 2, 'actor_id' => 1]); // Phim Tình Cảm - Nguyễn Văn A
    }
}
