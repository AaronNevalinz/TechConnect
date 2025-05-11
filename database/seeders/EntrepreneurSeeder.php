<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class EntrepreneurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Entrepreneur User',
            'email' => 'entrepreneur@example.com',
            'password' => Hash::make('password'),
            'role' => 'entrepreneur',
        ]);
    }
} 