<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Picture;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductCategory>
 */
class ProductCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id'  => Picture::all()->random()->id,
            'category_id' => Category::all()->random()->id,
        ];
    }
}
