<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ScheduledMaintenanceJob;

class ScheduledMaintenanceJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ScheduledMaintenanceJob::factory()
            ->count(5)
            ->create();
    }
}
