<?php

namespace Database\Factories;

use App\Enums\UserDocumentType;
use App\Enums\UserGender;
use App\Enums\UserRole;
use App\Enums\UserStatus;
use App\Models\Subsidiary;
use App\Models\Town;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'              => fake()->firstName(),
            'last_name'         => fake()->lastName(),
            'email'             => fake()->safeEmail(),
            'email_verified_at' => now(),
            'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'photo'             => fake()->imageUrl($width = 400, $height = 400),
            'gender'            => fake()->randomElement(UserGender::values()),
            'document_type'     => fake()->randomElement(UserDocumentType::values()),
            'document'          => fake()->unique()->numberBetween(10_000_000, 2_000_000_000),
            'phone'             => fake()->unique()->numberBetween(3_000_000_000, 4_000_000_000),
            'address'           => fake()->address(),
            'town_id'           => Town::all()->random()->id,
            'birth_date'        => fake()->dateTimeBetween('-10 years', '-1 month'),
            'role'              => fake()->randomElement(UserRole::values()),
            'subsidiary_id'     => ($sub = Subsidiary::all()->count() > 0) ? $sub->random()->id : null,
            'status'            => fake()->randomElement(UserStatus::values()),
            'remember_token'    => Str::random(10),
            'created_at'        => now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
