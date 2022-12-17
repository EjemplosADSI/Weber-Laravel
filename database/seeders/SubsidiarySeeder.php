<?php

namespace Database\Seeders;

use App\Enums\SubsidiaryStatus;
use App\Enums\SubsidiaryType;
use App\Models\Business;
use App\Models\Subsidiary;
use App\Models\User;
use Illuminate\Database\Seeder;

class SubsidiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subsidiary::insert([
            [
                'business_id'      => Business::whereNit(1057582244)->first()->id,
                'name'             => 'Liceo Centro',
                'administrator_id' => User::whereDocument(1057582244)->first()->id,
                'direction'        => 'Kra. 12 No. 55A – 51',
                'town_id'          => User::whereName('Sogamoso')->first()->id,
                'phone'            => '3123576360',
                'type'             => SubsidiaryType::Principal->value,
                'status'           => SubsidiaryStatus::Activo->value,
            ]
        ]);

        // Fake users
        Business::factory()->times(20)->create();
    }
}
