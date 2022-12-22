<?php

namespace Database\Factories;

use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PurchaseInvoice>
 */
class PurchaseInvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'invoice_id'      => Invoice::all()->random()->id,
            'producto_id'     => Product::all()->random()->id,
            'lote'            => fake()->numberBetween(0, 300_000),
            'expiration_date' => fake()->dateTimeBetween("-9 month", now()),
            'amount'          => fake()->randomFloat(2, 100, 1_000_000),
            'price'           => fake()->randomFloat(2, 1000, 10_000_000),
            'created_at'      => now()
        ];
    }
}
