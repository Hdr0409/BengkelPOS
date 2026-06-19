<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@bengkelpos.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Mechanic 1',
            'email' => 'mechanic1@bengkelpos.com',
            'password' => Hash::make('password2'),
            'role' => 'mechanic',
        ]);

        User::create([
            'name' => 'Mechanic 2',
            'email' => 'mechanic2@bengkelpos.com',
            'password' => Hash::make('password3'),
            'role' => 'mechanic',
        ]);

        User::create([
            'name' => 'Mechanic 3',
            'email' => 'mechanic3@bengkelpos.com',
            'password' => Hash::make('password4'),
            'role' => 'mechanic',
        ]);
    }
}
