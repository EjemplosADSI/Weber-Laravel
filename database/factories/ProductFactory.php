<?php

namespace Database\Factories;

use App\Enums\ProductStatus;
use App\Faker\ProductProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        fake()->addProvider(new ProductProvider($this->faker));
        return [
            'name'            => fake()->unique()->product(),
            'price'           => fake()->randomFloat(2, 1000, 10_000_000),
            'gain_percentage' => fake()->randomFloat(2, 10, 100),
            'stock'           => fake()->numberBetween(0, 16_777_215), //Maximo medium int
            'status'          => fake()->randomElement(ProductStatus::values()),
            'created_at'      => now(),
        ];
    }
}
