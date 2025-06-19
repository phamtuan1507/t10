<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Actor;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Actor::create(['name' => 'Nguyễn Văn A']);
        Actor::create(['name' => 'Kim Soo Hyun']);
        Actor::create(['name' => 'Tom Cruise']);
    }
}
