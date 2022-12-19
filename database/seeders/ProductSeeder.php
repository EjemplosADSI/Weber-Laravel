<?php

namespace Database\Seeders;

use App\Helpers\ArtisanDev\HelpersFunctions;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (HelpersFunctions::getDataFileCVS('ExcelData/Products.csv', ';') as $offset => $record) {
            //Product::create($record);
            Product::create([
                'name'            => $record['name'],
                'price'           => $record['price'],
                'gain_percentage' => $record['gain_percentage'],
                'stock'           => $record['stock'],
                'status'          => $record['status'],
                'created_at'      => now(),
            ]);
        }
        Product::factory()->times(15)->create();
    }
}
