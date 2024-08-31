<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CovidCase>
 */
class CovidCaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cases' => $this->faker->randomDigit(),
            'report_date' => $this->faker->date('Y-m-d'),
        ];
    }
}
