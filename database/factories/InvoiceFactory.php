<?php

namespace Database\Factories;

use App\Enums\InvoiceStatus;
use App\Enums\InvoiceType;
use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = fake()->randomElement(InvoiceType::values());
        $initial = ($type == InvoiceType::Venta->value) ? 'FV' : 'FC';
        $UserInvoice = ($type == InvoiceType::Venta->value) ?
            User::whereRole(UserRole::Cliente)->inRandomOrder()->first()->id :
            User::whereRole(UserRole::Proveedor)->inRandomOrder()->first()->id;

        return [
            'number'      => $initial . "-" . fake()->unique()->numberBetween(1, 100_000),
            'user_id'     => $UserInvoice,
            'employee_id' => User::whereRole(UserRole::Empleado)->inRandomOrder()->first()->id,
            'date'        => fake()->dateTimeBetween("-1 month", now()),
            'amount'      => fake()->randomFloat(2, 1000, 100_000_000),
            'type'        => $type,
            'status'      => fake()->randomElement(InvoiceStatus::values()),
            'created_at'  => now()
        ];
    }
}
