<?php

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::create([
            'name_crypto' => 1,
            'date' => '2024-03-23',
            'price' => 5000.00,
            'type_crypto' => 1,
            'cost_crypto' => 200.00,
            'quantity' => 0.5,
        ]);

        Transaction::create([
            'name_crypto' => 2,
            'date' => '2024-03-24',
            'price' => 6000.00,
            'type_crypto' => 2,
            'cost_crypto' => 250.00,
            'quantity' => 0.6,
        ]);

        Transaction::create([
            'name_crypto' => 3,
            'date' => '2024-03-25',
            'price' => 7000.00,
            'type_crypto' => 3,
            'cost_crypto' => 300.00,
            'quantity' => 0.7,
        ]);

        Transaction::create([
            'name_crypto' => 4,
            'date' => '2024-03-26',
            'price' => 8000.00,
            'type_crypto' => 4,
            'cost_crypto' => 350.00,
            'quantity' => 0.8,
        ]);

        Transaction::create([
            'name_crypto' => 5,
            'date' => '2024-03-27',
            'price' => 9000.00,
            'type_crypto' => 5,
            'cost_crypto' => 400.00,
            'quantity' => 0.9,
        ]);

    }
}
