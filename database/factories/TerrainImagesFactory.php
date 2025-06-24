<?php

namespace Database\Factories;

use App\Models\Terrain;
use Illuminate\Database\Eloquent\Factories\Factory;

class TerrainImagesFactory extends Factory
{
    public function definition(): array
    {
        return [
            'terrain_id' => Terrain::factory(),
            'image_path' => $this->faker->imageUrl(),
            'uploaded_at' => $this->faker->dateTime(),
        ];
    }
}