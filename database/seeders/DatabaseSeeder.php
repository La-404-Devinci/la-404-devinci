<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'slug' => Str::uuid(),
            'email' => 'guillaume.fine@edu.devinci.fr',
            'password' => Hash::make('password'),
            'lastname' => 'Fine',
            'firstname' => 'Guillaume',
            'display_role' => 'treasurer',
            'role' => 'admin',
        ]);
    }
}
