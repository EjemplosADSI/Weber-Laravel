<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BusinessSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(TownSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SubsidiarySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PictureSeeder::class);
        $this->call(ProductPictureSeeder::class);
        $this->call(ProductCategorySeeder::class);
        $this->call(InvoiceSeeder::class);
        $this->call(PurchaseInvoiceSeeder::class);
        $this->call(SalesInvoiceSeeder::class);
        $this->call(RefundSeeder::class);
    }
}
