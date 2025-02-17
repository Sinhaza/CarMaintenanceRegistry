<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\MaintenanceJob;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaintenanceJobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MaintenanceJob::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'rate' => fake()->word(),
            'deleted_at' => fake()->dateTime(),
        ];
    }
}
