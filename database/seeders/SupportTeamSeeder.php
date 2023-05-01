<?php

namespace Database\Seeders;

use App\Models\SupportTeam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupportTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SupportTeam::create([
            'team_name' => 'Support Team',
            'team_group' => 'A Group'
        ]);
        SupportTeam::create([
            'team_name' => 'Account Team',
            'team_group' => 'B Group'
        ]);
    }
}
