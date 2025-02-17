<?php

namespace Database\Seeders;

use App\Models\SpareSpart;
use Illuminate\Database\Seeder;

class SpareSpartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SpareSpart::factory()
            ->count(5)
            ->create();
    }
}
