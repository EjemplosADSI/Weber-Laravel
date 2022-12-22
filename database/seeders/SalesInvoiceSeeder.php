<?php

namespace Database\Seeders;

use App\Models\SalesInvoice;
use Illuminate\Database\Seeder;

class SalesInvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SalesInvoice::insert([
            [
                'amount'              => 100,
                'price'               => 830_000,
                'invoice_id'          => 1,
                'purchase_invoice_id' => 1,
                'created_at'          => now()
            ]
        ]);
        // Fake users
        SalesInvoice::factory()->times(20)->create();
    }
}
