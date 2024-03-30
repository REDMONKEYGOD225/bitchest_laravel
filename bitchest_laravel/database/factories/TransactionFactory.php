<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    protected $model = Transaction::class;

    public function definition(): array
    {
        $cryptos = range(1, 10); // Liste des identifiants des cryptomonnaies (1 à 10)
        $cryptoId = $this->faker->randomElement($cryptos); // Choisir aléatoirement l'identifiant d'une cryptomonnaie

        return [
            'name_crypto' => $cryptoId,
            'date' => $this->faker->dateTimeBetween('-30 days', 'now'), 
            'price' => $this->faker->randomFloat(2, 0, 1000), 
            'type_crypto' => $this->faker->numberBetween(1, 2), 
            'count_crypto' => $this->faker->numberBetween(1, 100), 
            'quantity' => $this->faker->randomFloat(4, 0.001, 10),
        ];
    }
}
