<?php

namespace Database\Seeders;

use App\Models\PurchaseInvoice;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PurchaseInvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PurchaseInvoice::insert([
            [
                'invoice_id'      => 1,
                'producto_id'     => 1,
                'lote'            => 43018,
                'expiration_date' => Carbon::now()->addMonths(6),
                'amount'          => 100,
                'price'           => 830_000,
                'created_at'      => now()
            ]
        ]);
        // Fake users
        PurchaseInvoice::factory()->times(20)->create();
    }

}
