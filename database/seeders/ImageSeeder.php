<?php

namespace Database\Seeders;

use App\Models\Api\V1\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::factory()
            ->count(20)
            ->create();
    }
}
