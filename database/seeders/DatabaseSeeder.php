<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Admin Apay',
            'email' => 'admin@apaysbooks.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'remember_token' => Str::random(10),
        ]);

        // Create regular user
        User::create([
            'name' => 'John Doe',
            'email' => 'user@apaysbooks.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'role' => 'user',
            'remember_token' => Str::random(10),
        ]);

        // Run book seeder
        $this->call(BookSeeder::class);
    }
}
