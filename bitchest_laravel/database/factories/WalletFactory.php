<?php

namespace Database\Factories;

use App\Models\Wallet;
use Illuminate\Database\Eloquent\Factories\Factory;

class WalletFactory extends Factory
{
    protected $model = Wallet::class;

    public function definition(): array
    {
        return [
            'id_user' => function () {
                // Retourne un ID d'utilisateur existant depuis la base de données ou génère un nouveau
                return \App\Models\User::inRandomOrder()->first()->id ?? \App\Models\User::factory()->create()->id;
            },
            'key_security' => $this->faker->sha256, // Exemple de génération d'une clé de sécurité
            'address' => $this->faker->unique()->ipv6, // Exemple de génération d'une adresse unique
        ];
    }
}
