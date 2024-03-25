<?php

use App\Models\Purchase;
use Illuminate\Database\Seeder;

class PurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Purchase::create([
            'id_user' => 1,
            'id_crypto' => 1,
            'quantity' => 2.5,
            'price' => 60000.00,
            'date_achat' => '2024-03-22',
        ]);

        Purchase::create([
            'id_user' => 2,
            'id_crypto' => 2,
            'quantity' => 5.0,
            'price' => 3000.00,
            'date_achat' => '2024-03-22',
        ]);

        Purchase::create([
            'id_user' => 3,
            'id_crypto' => 3,
            'quantity' => 10.0,
            'price' => 250.00,
            'date_achat' => '2024-03-22',
        ]);

        Purchase::create([
            'id_user' => 4,
            'id_crypto' => 4,
            'quantity' => 2.0,
            'price' => 800.00,
            'date_achat' => '2024-03-22',
        ]);

        Purchase::create([
            'id_user' => 5,
            'id_crypto' => 5,
            'quantity' => 5.0,
            'price' => 150.00,
            'date_achat' => '2024-03-22',
        ]);
    }
}
