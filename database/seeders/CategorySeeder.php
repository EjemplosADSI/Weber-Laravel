<?php

namespace Database\Seeders;

use App\Enums\CategoryStatus;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'name'        => 'Equipos de Computo',
                'description' => 'Computadores, portatiles, de escritorio, componentes',
                'status'      => CategoryStatus::Activo->value,
                'created_at'  => fake()->dateTimeBetween("-1 month", now()),
                'updated_at'  => \Carbon\Carbon::now()
            ]
        ]);

        // Fake users
        Category::factory()->times(30)->create();
    }
}
