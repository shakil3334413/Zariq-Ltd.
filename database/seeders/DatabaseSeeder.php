<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
      $this->call(RoleSeeder::class);
      $this->call(UserSeeder::class);
      $this->call(CustomerSeeder::class);
      $this->call(SupportTeamSeeder::class);
    }
}
