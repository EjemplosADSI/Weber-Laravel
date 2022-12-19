<?php

namespace Database\Factories;

use App\Enums\SubsidiaryStatus;
use App\Enums\SubsidiaryType;
use App\Models\Business;
use App\Models\Town;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subsidiary>
 */
class SubsidiaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'business_id'      => Business::all()->random()->id,
            'name'             => fake()->company . " " . fake()->name(),
            'administrator_id' => User::all()->random()->id ?? 1,
            'direction'        => fake()->address(),
            'town_id'          => Town::all()->random()->id,
            'phone'            => fake()->unique()->numberBetween(3_000_000_000, 4_000_000_000),
            'type'             => fake()->randomElement(SubsidiaryType::values()),
            'status'           => fake()->randomElement(SubsidiaryStatus::values()),
            'created_at'       => fake()->dateTimeBetween("-1 month", now()),
            'updated_at'       => \Carbon\Carbon::now()
        ];
    }
}
