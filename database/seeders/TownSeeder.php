<?php

namespace Database\Seeders;

use App\Helpers\ArtisanDev\HelpersFunctions;
use App\Models\Town;
use Illuminate\Database\Seeder;

class TownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Town::factory()->times(10)->create();
        foreach (HelpersFunctions::getDataFileCVS('ExcelData/Towns.csv', ',') as $offset => $record) {
            //Departamento::create($record);
            Town::create([
                'id'            => $record['id'],
                'name'          => $record['name'],
                'department_id' => $record['department_id'],
                'shortened'     => $record['shortened'],
                'status'        => $record['status'],
            ]);
        }
    }
}
