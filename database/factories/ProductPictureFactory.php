<?php

namespace Database\Factories;

use App\Enums\ProductStatus;
use App\Models\Picture;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductPicture>
 */
class ProductPictureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'picture_id' => Picture::all()->random()->id,
            'product_id' => Picture::all()->random()->id,
            'status'     => fake()->randomElement(ProductStatus::values()),
            'created_at' => now()
        ];
    }
}
