<?php

namespace Database\Seeders;

use App\Models\MaintenanceJob;
use Illuminate\Database\Seeder;

class MaintenanceJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MaintenanceJob::factory()
            ->count(5)
            ->create();
    }
}
