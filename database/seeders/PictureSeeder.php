<?php

namespace Database\Seeders;

use App\Models\Picture;
use Illuminate\Database\Seeder;

class PictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Picture::insert([
            [
                'name'        => 'Patata',
                'description' => 'Esta es una patata',
                'route'       => 'https://via.placeholder.com/640x480.png/00bbaa?text=potato',
                'created_at'  => fake()->dateTimeBetween("-1 month", now()),
                'updated_at'  => \Carbon\Carbon::now()
            ]
        ]);

        // Fake users
        Picture::factory()->times(20)->create();

    }
}
