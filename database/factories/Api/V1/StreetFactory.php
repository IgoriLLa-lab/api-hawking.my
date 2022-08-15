<?php

namespace Database\Factories\Api\V1;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Api\V1\Street>
 */
class StreetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'street_name' => $this->faker->streetName(),
            'home_number' => $this->faker->numberBetween(1, 80),
            'frame_number' => $this->faker->numberBetween(1, 20),
            'apartment_number' => $this->faker->numberBetween(1, 900),
        ];
    }
}
