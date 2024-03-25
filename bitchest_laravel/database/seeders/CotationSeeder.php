<?php

use App\Models\Cotation;
use Illuminate\Database\Seeder;

class CotationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cotation::create([
            'crypto' => 1,
            'count' => 50000.00,
        ]);

        Cotation::create([
            'crypto' => 2,
            'count' => 3000.00,
        ]);

        Cotation::create([
            'crypto' => 3,
            'count' => 250.00,
        ]);

        Cotation::create([
            'crypto' => 4,
            'count' => 800.00,
        ]);

        Cotation::create([
            'crypto' => 5,
            'count' => 150.00,
        ]);
    }
}
