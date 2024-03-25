<?php

use App\Models\Sell;
use Illuminate\Database\Seeder;

class SellSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sell::create([
            'id_user' => 1,
            'id_crypto' => 1,
            'quantity' => 1.5,
            'price' => 65000.00,
            'date_sell' => '2024-03-22',
        ]);

        Sell::create([
            'id_user' => 2,
            'id_crypto' => 2,
            'quantity' => 3.0,
            'price' => 3200.00,
            'date_sell' => '2024-03-22',
        ]);

        Sell::create([
            'id_user' => 3,
            'id_crypto' => 3,
            'quantity' => 5.0,
            'price' => 300.00,
            'date_sell' => '2024-03-22',
        ]);

        Sell::create([
            'id_user' => 4,
            'id_crypto' => 4,
            'quantity' => 1.0,
            'price' => 900.00,
            'date_sell' => '2024-03-22',
        ]);

        Sell::create([
            'id_user' => 5,
            'id_crypto' => 5,
            'quantity' => 3.0,
            'price' => 200.00,
            'date_sell' => '2024-03-22',
        ]);
    }
}
