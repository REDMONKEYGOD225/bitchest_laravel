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
            'date' => $this->faker->dateTimeBetween('-30 days', 'now'), // Date aléatoire dans les 30 derniers jours
            'price' => $this->faker->randomFloat(2, 10, 1000), // Prix aléatoire entre 10 et 1000 avec 2 décimales
            'type_crypto' => $this->faker->numberBetween(1, 2), // Remplacer par une logique appropriée pour le type de crypto
            'count_crypto' => $this->faker->numberBetween(1, 100), // Quantité aléatoire entre 1 et 100
            'quantity' => $this->faker->randomFloat(4, 0.001, 10), // Quantité aléatoire entre 0.001 et 10 avec 4 décimales
        ];
    }
}
