<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\Refund;
use App\Models\SalesInvoice;
use App\Models\User;
use Illuminate\Database\Seeder;

class RefundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Refund::insert([
            [
                'date'               => fake()->dateTimeBetween("-12 month", now()),
                'description'        => "Se devuelve por que no es lo que esperaba",
                'employee_id'        => User::whereRole(UserRole::Empleado)->inRandomOrder()->first()->id,
                'amount'             => fake()->randomFloat(2, 100, 1_000_000),
                'detail_purchase_id' => SalesInvoice::all()->random()->id,
                'created_at'         => now()
            ]
        ]);
        // Fake users
        Refund::factory()->times(20)->create();
    }
}
