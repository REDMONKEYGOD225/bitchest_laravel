<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    protected $model = Account::class;

    public function definition(): array
    {
        return [
            'id_wallet' => function () {
                return \App\Models\Wallet::factory()->create()->id;
            },
            'sold' => $this->faker->randomFloat(2, 100, 10000), // Solde aléatoire entre 100 et 10000 avec 2 décimales
        ];
    }
}
