<?php

namespace Database\Seeders;

use App\Enums\BusineStatus;
use App\Models\Business;
use Illuminate\Database\Seeder;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Business::insert([
            [
                'name'       => 'ArtisanDevs',
                'nit'        => '1057582244',
                'status'     => BusineStatus::Activo->value,
                'created_at' => fake()->dateTimeBetween("-1 month", now()),
                'updated_at' => \Carbon\Carbon::now()
            ]
        ]);

        // Fake users
        Business::factory()->times(10)->create();
    }
}
