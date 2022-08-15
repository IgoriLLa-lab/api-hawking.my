<?php

namespace Database\Seeders;

use App\Models\Api\V1\Seller;
use Illuminate\Database\Seeder;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seller::factory()
            ->count(5)
            ->create();
    }
}
