<?php

namespace Database\Factories;

use App\Enums\UserRole;
use App\Models\SalesInvoice;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Refund>
 */
class RefundFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date'               => fake()->dateTimeBetween("-12 month", now()),
            'description'        => fake()->text(),
            'employee_id'        => User::whereRole(UserRole::Empleado)->inRandomOrder()->first()->id,
            'amount'             => fake()->randomFloat(2, 100, 1_000_000),
            'detail_purchase_id' => SalesInvoice::all()->random()->id,
        ];
    }
}
