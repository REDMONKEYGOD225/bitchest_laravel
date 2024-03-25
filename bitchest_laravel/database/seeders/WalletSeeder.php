<?php

use App\Models\Wallet;
use Illuminate\Database\Seeder;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Wallet::create([
            'id_user' => 1,
            'key_security' => 'securekey123',
            'address' => '0x123456789abcdef',
        ]);

        Wallet::create([
            'id_user' => 2,
            'key_security' => 'securekey456',
            'address' => '0x987654321abcdef',
        ]);

        Wallet::create([
            'id_user' => 3,
            'key_security' => 'securekey789',
            'address' => '0xfedcba9876543210',
        ]);

        Wallet::create([
            'id_user' => 4,
            'key_security' => 'securekey987',
            'address' => '0xabcdef0123456789',
        ]);

        Wallet::create([
            'id_user' => 5,
            'key_security' => 'securekey654',
            'address' => '0x456789abcdef0123',
        ]);

    }
}
