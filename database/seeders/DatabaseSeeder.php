<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Ruben Matthes',
            'email' => 'rthem@gmx.de',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'remember_token' => token_name(10),
            ]);
            
        \App\Models\User::factory(100)->create();
    }
}
