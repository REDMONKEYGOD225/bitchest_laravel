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
            'sold' => $this->faker->randomFloat(2, 0, 999999999999), // Solde aléatoire entre 0 et 999.999.999.999 avec 2 décimales
        ];
    }
}
