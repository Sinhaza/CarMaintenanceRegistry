<?php

namespace Database\Factories;

use App\Enums\CarPartType;
use App\Models\SpareSpart;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpareSpartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SpareSpart::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'price' => fake()->randomFloat(2, 0, 9999),
            'amount' => fake()->word(),
            'type' => fake()->randomElement(CarPartType::cases()),
            'part_id' => fake()->word(),
        ];
    }
}
