<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'nayla',
            'username' => 'nanay',
            'email' => 'nay@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',

        ]);

        User::create([
            'name' => 'kimberly',
            'username' => 'kim',
            'email' => 'kimi@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',


        ]);

        User::create([
            'name' => 'hakam',
            'username' => 'kakam',
            'email' => 'kamm@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',

        ]);

        User::create([
            'name' => 'laura',
            'username' => 'rara',
            'email' => 'lala@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',

        ]);
    }
}
