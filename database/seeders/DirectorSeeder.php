<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Director;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Director::create(['name' => 'Trần Anh Hùng']);
        Director::create(['name' => 'Park Chan-wook']);
        Director::create(['name' => 'Christopher Nolan']);
    }
}
