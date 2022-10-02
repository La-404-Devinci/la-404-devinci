<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
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
        // Desactivate foreign key constraints and model guard
        Model::unguard();
        Schema::disableForeignKeyConstraints();

        // Clear all tables
        DB::table('failed_jobs')->truncate();
        DB::table('password_resets')->truncate();
        DB::table('personal_access_tokens')->truncate();

        DB::table('users')->truncate();
        DB::table('courses')->truncate();
        DB::table('courses_tags')->truncate();
        DB::table('files')->truncate();
        DB::table('lessons')->truncate();
        DB::table('projects')->truncate();
        DB::table('projects_tags')->truncate();
        DB::table('projects_users')->truncate();
        DB::table('tags')->truncate();
        DB::table('topics')->truncate();

        // Seed tables
        User::factory()->create([
            'slug' => Str::uuid(),
            'email' => 'guillaume.fine@edu.devinci.fr',
            'password' => Hash::make('password'),
            'lastname' => 'Fine',
            'firstname' => 'Guillaume',
            'display_role' => 'treasurer',
            'role' => 'admin',
        ]);

        User::factory()->create([
            'slug' => Str::uuid(),
            'email' => 'vincent.michel@edu.devinci.fr',
            'password' => Hash::make('password'),
            'lastname' => 'Michel',
            'firstname' => 'Vincent',
            'display_role' => 'president',
            'role' => 'admin',
        ]);

        User::factory()->create([
            'slug' => Str::uuid(),
            'email' => 'clement.duvivier@edu.devinci.fr',
            'password' => Hash::make('password'),
            'lastname' => 'Duvivier',
            'firstname' => 'Clément',
            'display_role' => 'secretary',
            'role' => 'admin',
        ]);

        User::factory()->create([
            'slug' => Str::uuid(),
            'email' => 'nicolas.de_garrigues@edu.devinci.fr',
            'password' => Hash::make('password'),
            'lastname' => 'De Garrigues',
            'firstname' => 'Nicolas',
            'display_role' => 'president',
            'role' => 'admin',
        ]);

        User::factory()->create([
            'slug' => Str::uuid(),
            'email' => 'user@email.com',
            'password' => Hash::make('password'),
            'lastname' => 'Random',
            'firstname' => 'User',
            'display_role' => 'member',
            'role' => 'user',
        ]);

        User::factory()->create([
            'slug' => Str::uuid(),
            'email' => 'instructor@email.com',
            'password' => Hash::make('password'),
            'lastname' => 'Random',
            'firstname' => 'Instructor',
            'display_role' => 'member',
            'role' => 'instructor',
        ]);

        // reactivate foreign key constraints and model guard
        Schema::enableForeignKeyConstraints();
        Model::reguard();
    }
}
