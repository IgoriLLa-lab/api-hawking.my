<?php

namespace Database\Seeders;

use App\Models\Api\V1\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::factory()
            ->count(20)
            ->create();
    }
}
