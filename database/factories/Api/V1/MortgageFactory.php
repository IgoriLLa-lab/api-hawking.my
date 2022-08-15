<?php

namespace Database\Factories\Api\V1;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Api\V1\Mortgage>
 */
class MortgageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'bank_name' => $this->faker->company(), //название банка
            'bank_logo' => $this->faker->url(),
            'down_payment' => $this->faker->numberBetween(300, 400), //Первоначальный взнос
            'term' => $this->faker->numberBetween(10, 20), //Срок кредитования
            'rate' => $this->faker->numberBetween(10, 20),//Ставка
            'sum' => $this->faker->numberBetween(5000, 8000),//Кредит
            'payment_month' => $this->faker->numberBetween(100, 200)//Ежемесячный платеж
        ];
    }
}
