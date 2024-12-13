<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Check if the user already exists
        $user = User::where('email', 'test@example.com')->first();

        if (!$user) {
            // Create the user if it does not exist
            User::create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'), // Use a secure password
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
