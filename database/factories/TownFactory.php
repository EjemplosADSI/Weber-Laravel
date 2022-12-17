<?php

namespace Database\Factories;

use App\Enums\TownStatus;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Town>
 */
class TownFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'name'          => $name = fake()->name() . " " . fake()->name(),
            'department_id' => Department::all()->random()->id,
            'shortened'     => Str::limit($name, 10, $end = '...'),
            'status'        => fake()->randomElement(TownStatus::values())
        ];
    }
}
