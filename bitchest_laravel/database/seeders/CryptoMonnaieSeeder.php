<?php

use App\Models\CryptoMonnaie;
use Illuminate\Database\Seeder;

class CryptoMonnaieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CryptoMonnaie::create([
            'name' => 'Bitcoin',
            'symbol' => 'BTC',
        ]);

        CryptoMonnaie::create([
            'name' => 'Ethereum',
            'symbol' => 'ETH',
        ]);

        CryptoMonnaie::create([
            'name' => 'Ripple',
            'symbol' => 'XRP',
        ]);

        CryptoMonnaie::create([
            'name' => 'Litecoin',
            'symbol' => 'LTC',
        ]);

        CryptoMonnaie::create([
            'name' => 'Cardano',
            'symbol' => 'ADA',
        ]);
    }
}
