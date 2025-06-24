<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Terrain>
 */
class TerrainFactory extends Factory
{
    public function definition(): array
    {
        return [
            'owner_id' => User::factory(),
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'location' => $this->faker->city(),
            'area_size' => $this->faker->randomFloat(2, 100, 10000),
            'price_per_day' => $this->faker->randomFloat(2, 10, 1000),
            'available_from' => $this->faker->date(),
            'available_to' => $this->faker->date(),
            'is_available' => $this->faker->boolean(),
            'main_image' => $this->faker->imageUrl(),
        ];
    }
}