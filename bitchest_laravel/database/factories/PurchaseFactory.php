<?php

namespace Database\Factories;

use App\Models\Purchase;
use Illuminate\Database\Eloquent\Factories\Factory;

class PurchaseFactory extends Factory
{
    protected $model = Purchase::class;

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
            'date_achat' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
