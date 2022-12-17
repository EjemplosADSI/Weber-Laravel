<?php

namespace Database\Seeders;

use App\Helpers\ArtisanDev\HelpersFunctions;
use App\Models\Department;
use Illuminate\Database\Seeder;
use League\Csv\Exception;


class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        //Department::factory()->times(10)->create();
        foreach (HelpersFunctions::getDataFileCVS('ExcelData/Departments.csv', ',') as $offset => $record) {
            //Departamento::create($record);
            Department::create([
                'id'     => $record['id'],
                'name'   => $record['name'],
                'region' => $record['region'],
                'status' => $record['status'],
            ]);
        }
    }
}
