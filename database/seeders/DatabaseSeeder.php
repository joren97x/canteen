<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Food;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Food::factory(10)->create();
        User::create([
            'fullname' => 'admin',
            'contact' => '09123456789',
            'role' => 'admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('asdasd'),
        ]);
    }
}
