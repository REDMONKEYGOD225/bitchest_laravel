<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Admin_User',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('adminpassword'),
        ]);
    }
}
