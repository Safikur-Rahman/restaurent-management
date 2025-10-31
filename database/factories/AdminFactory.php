<?php

namespace Database\Factories;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'phone_no' =>'01' . fake()->numberBetween(300000000, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('password'),
            'address' => fake()->address(),
            'role_id' => fake()->numberBetween(1, 5),
            'salary' => fake()->numberBetween(15000, 50000),
            'salary_perday' => fake()->numberBetween(300, 2000),
            'duty_shift' => fake()->randomElement(['Morning', 'Evening', 'Night']),
            'blood_group' => fake()->randomElement(['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-']),
            
        ];
    }
}
