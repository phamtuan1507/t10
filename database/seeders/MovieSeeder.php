<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'title' => 'Phim Mới 1',
            'description' => 'Mô tả phim hành động',
            'release_year' => 2025,
            'duration' => 120,
            'rating' => 8.5,
            'poster_url' => 'https://via.placeholder.com/200x250',
            'trailer_url' => 'https://youtube.com/watch?v=example',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Movie::create([
            'title' => 'Phim Mới 2',
            'description' => 'Mô tả phim tình cảm',
            'release_year' => 2025,
            'duration' => 110,
            'rating' => 7.9,
            'poster_url' => 'https://via.placeholder.com/200x250',
            'trailer_url' => 'https://youtube.com/watch?v=example2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Movie::create([
            'title' => 'Phim Mới 3',
            'description' => 'Mô tả phim tâm lý',
            'release_year' => 2025,
            'duration' => 140,
            'rating' => 9.9,
            'poster_url' => 'https://via.placeholder.com/200x250',
            'trailer_url' => 'https://youtube.com/watch?v=example2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Movie::create([
            'title' => 'Phim Mới 4',
            'description' => 'Mô tả phim kinh dị',
            'release_year' => 2025,
            'duration' => 150,
            'rating' => 8.9,
            'poster_url' => 'https://via.placeholder.com/200x250',
            'trailer_url' => 'https://youtube.com/watch?v=example2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Movie::create([
            'title' => 'Phim Hành Động 2025',
            'description' => 'Một bộ phim hành động kịch tính',
            'release_year' => 2025,
            'duration' => 120,
            'rating' => 8.5,
            'poster_url' => 'https://via.placeholder.com/200x250',
            'trailer_url' => 'https://youtube.com/watch?v=action1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Movie::create([
            'title' => 'Phim Tình Cảm 2025',
            'description' => 'Một câu chuyện tình cảm lãng mạn',
            'release_year' => 2025,
            'duration' => 110,
            'rating' => 7.9,
            'poster_url' => 'https://via.placeholder.com/200x250',
            'trailer_url' => 'https://youtube.com/watch?v=romance1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
