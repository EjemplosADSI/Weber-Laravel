<?php

namespace Database\Seeders;

use App\Enums\UserDocumentType;
use App\Enums\UserGender;
use App\Enums\UserRole;
use App\Enums\UserStatus;
use App\Models\Subsidiary;
use App\Models\Town;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Default credentials
        \App\Models\User::insert([
            [
                'name'              => 'Diego Alonso',
                'last_name'         => 'Ojeda Medina',
                'email'             => 'daom89@gmail.com',
                'email_verified_at' => now(),
                'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'photo'             => fake()->imageUrl($width = 400, $height = 400),
                'gender'            => UserGender::MASCULINO->value,
                'document_type'     => UserDocumentType::CC->value,
                'document'          => 1057111222,
                'phone'             => 3118864151,
                'address'           => 'Trasnversal 45 5G-15',
                'town_id'           => Town::all()->random()->id,
                'birth_date'        => fake()->dateTimeBetween('-10 years', '-1 month'),
                'role'              => fake()->randomElement(UserRole::values()),
                'subsidiary_id'     => Subsidiary::all()->random()->id ?? 1,
                'status'            => fake()->randomElement(UserStatus::values()),
                'remember_token'    => Str::random(10)



                'name'              => 'Diego Ojeda',
                'email'             => 'daom89@gmail.com',
                'email_verified_at' => now(),
                'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'gender'            => 'male',
                'active'            => 1,
                'remember_token'    => Str::random(10)
            ]
        ]);

        // Fake users
        User::factory()->times(9)->create();
    }
}
