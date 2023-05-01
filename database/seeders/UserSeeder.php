<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password' => Hash::make('password')
        ])->assignRole('admin');
        User::create([
            'name'=>'User',
            'email'=>'user@gmail.com',
            'password' => Hash::make('password')
        ])->assignRole('user');
        User::create([
            'name'=>'Provider',
            'email'=>'provider@gmail.com',
            'password' => Hash::make('password')
        ])->assignRole('provider');
    }
}
