<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GenreSeeder::class,
            CountrySeeder::class,
            ActorSeeder::class,
            DirectorSeeder::class,
            MovieSeeder::class,
            MovieGenreSeeder::class,
            MovieCountrySeeder::class,
            MovieActorSeeder::class,
            MovieDirectorSeeder::class,
        ]);


    }
}

