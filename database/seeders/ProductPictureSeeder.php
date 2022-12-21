<?php

namespace Database\Seeders;

use App\Enums\ProductStatus;
use App\Models\ProductPicture;
use Illuminate\Database\Seeder;

class ProductPictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductPicture::insert([
            [
                'picture_id' => 1,
                'product_id' => 1,
                'status'     => ProductStatus::Activo->value,
                'created_at' => now()
            ]
        ]);
        // Fake users
        ProductPicture::factory()->times(20)->create();
    }
}
