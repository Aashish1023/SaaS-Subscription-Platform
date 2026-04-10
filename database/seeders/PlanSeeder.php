<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::create([
            'name' => 'Free',
            'price' => 0,
            'interval' => 'monthly',
            'project_limit' => 5,
        ]);

        Plan::create([
            'name' => 'Pro',
            'price' => 10,
            'interval' => 'monthly',
            'project_limit' => 50,
        ]);

        Plan::create([
            'name' => 'Premium',
            'price' => 20,
            'interval' => 'monthly',
            'project_limit' => 500,
        ]);
    }
}
