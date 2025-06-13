<?php

namespace Database\Factories;

use App\Models\Invoice;
use App\Models\PurchaseInvoice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SalesInvoice>
 */
class SalesInvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'amount'              => fake()->randomFloat(2, 100, 1_000_000),
            'price'               => fake()->randomFloat(2, 1000, 10_000_000),
            'invoice_id'          => Invoice::all()->random()->id,
            'purchase_invoice_id' => PurchaseInvoice::all()->random()->id,
            'created_at'          => now()
        ];
    }
}
