<?php

namespace Database\Seeders;

use App\Models\Api\V1\Mortgage;
use Illuminate\Database\Seeder;

class MortgageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Mortgage::factory()
            ->count(3)
            ->create();
    }
}
