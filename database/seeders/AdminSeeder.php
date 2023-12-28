<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'fullname' => 'admin',
            'contact' => '09123456789',
            'role' => 'admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('asdasd'),
        ]);
    }
}
