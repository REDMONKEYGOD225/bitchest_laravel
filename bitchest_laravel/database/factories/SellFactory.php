<?php

namespace Database\Factories;

use App\Models\Sell;
use Illuminate\Database\Eloquent\Factories\Factory;

class SellFactory extends Factory
{
    protected $model = Sell::class;

    public function definition(): array
    {
        return [
            'id_user' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            'id_crypto' => function () {
                return \App\Models\CryptoMonnaie::factory()->create()->id;
            },
            'quantity' => $this->faker->randomFloat(4, 0.01, 100),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'date_sell' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
