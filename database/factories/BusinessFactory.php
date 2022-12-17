<?php

namespace Database\Factories;
use App\Enums\BusineStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Business>
 */
class BusinessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'   => fake()->company(),
            'nit'    => fake()->unique()->numberBetween(1_000_000, 10_000_000),
            'status' => fake()->randomElement(BusineStatus::values()),
        ];
    }

}
