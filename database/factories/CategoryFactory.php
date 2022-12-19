<?php

namespace Database\Factories;

use App\Enums\CategoryStatus;
use App\Faker\CategoryProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        fake()->addProvider(new CategoryProvider($this->faker));
        return [
            'name'        => fake()->unique()->category(),
            'description' => fake()->text(),
            'status'      => fake()->randomElement(CategoryStatus::values()),
            'created_at'  => now(),
        ];
    }
}
