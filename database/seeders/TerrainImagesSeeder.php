<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Terrain_images;

class TerrainImagesSeeder extends Seeder
{
    public function run(): void
    {
        Terrain_images::factory()->count(20)->create();
    }
}