<?php

namespace Database\Factories;

use App\Models\Terrain;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    public function definition(): array
    {
        $start = $this->faker->dateTimeBetween('now', '+1 month');
        $end = (clone $start)->modify('+' . rand(1, 7) . ' days');
        $price = $this->faker->randomFloat(2, 50, 1000);

        return [
            'terrain_id' => Terrain::factory(),
            'renter_id' => User::factory(),
            'start_date' => $start->format('Y-m-d'),
            'end_date' => $end->format('Y-m-d'),
            'total_price' => $price,
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected', 'cancelled', 'completed']),
        ];
    }
}