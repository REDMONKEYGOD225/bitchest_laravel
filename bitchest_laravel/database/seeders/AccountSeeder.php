<?php

use App\Models\Account;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Account::create([
            'id_wallet' => 1,
            'sold' => 5000.00,
        ]);

        Account::create([
            'id_wallet' => 2,
            'sold' => 7500.00,
        ]);

        Account::create([
            'id_wallet' => 3,
            'sold' => 3000.00,
        ]);

        Account::create([
            'id_wallet' => 4,
            'sold' => 4000.00,
        ]);

        Account::create([
            'id_wallet' => 5,
            'sold' => 6000.00,
        ]);
    }
}
