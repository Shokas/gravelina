<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(4),
            'start_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'end_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'location' => $this->faker->address(),
            'distance' => $this->faker->randomNumber(5, false),
            'elevation_gain' => $this->faker->randomNumber(5, false),
            'difficulty' => $this->faker->numberBetween(1, 5),
            'type' => $this->faker->randomElement(['RB', 'MTB', 'CX', 'XC', 'EB']),
            'organizer' => $this->faker->name(),
            'website' => $this->faker->url(),
            'registration_link' => $this->faker->url(),
        ];
    }
}
