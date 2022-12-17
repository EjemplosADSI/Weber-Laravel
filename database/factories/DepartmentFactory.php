<?php

namespace Database\Factories;

use App\Enums\DepartamentRegion;
use App\Enums\DepartamentStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'   => fake()->city,
            'region' => fake()->randomElement(DepartamentRegion::values()),
            'status' => fake()->randomElement(DepartamentStatus::values()),
        ];
    }
}
