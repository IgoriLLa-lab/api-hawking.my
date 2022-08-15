<?php

namespace Database\Factories\Api\V1;

use App\Models\Api\V1\Area;
use App\Models\Api\V1\City;
use App\Models\Api\V1\Seller;
use App\Models\Api\V1\Street;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Api\V1\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'city_id' => City::factory(),
            'area_id' => Area::factory(),
            'street_id' => Street::factory(),
            'seller_id' => Seller::factory(),
            'description' => $this->faker->realText(),
            'price' => $this->faker->numberBetween(10, 1000),
        ];
    }
}
