<?php

namespace Database\Factories;

use App\Models\Cotation;
use Illuminate\Database\Eloquent\Factories\Factory;

class CotationFactory extends Factory
{
    protected $model = Cotation::class;

    public function definition(): array
    {
        return [
            'crypto' => function () {
                return \App\Models\CryptoMonnaie::factory()->create()->id;
            },
            'count' => $this->faker->randomFloat(2, 1, 100), // Cotation aléatoire entre 1 et 100 avec 2 décimales
        ];
    }
}