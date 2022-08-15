<?php

namespace Database\Factories\Api\V1;

use App\Models\Api\V1\Mortgage;
use App\Models\Api\V1\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Api\V1\MortgagesRoom>
 */
class MortgagesRoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'room_id' => Room::factory(),
            'mortgage_id' => Mortgage::factory(),
        ];
    }
}
