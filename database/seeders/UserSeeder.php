<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=> 'User',
            'email'=> 'user@gmail.com',
            'password'=> bcrypt('12345678'),
            'user_type'=> 'user',
        ]);
        User::create([
            'name'=> 'Admin',
            'email'=> 'admin@gmail.com',
            'password'=> bcrypt('12345678'),
            'user_type'=> 'admin',
        ]);
    }
}
