<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Terrain;

class TerrainSeeder extends Seeder
{
    public function run()
    {
        Terrain::factory()->count(10)->create();
    }
}
