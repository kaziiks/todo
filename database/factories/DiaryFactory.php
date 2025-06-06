<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diary>
 */
class DiaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->word(5),
            "body" => $this->faker->sentence(5),
            "date" => $this->faker->dateTime(),
            "priority" => $this->faker->randomElement(['low', 'medium', 'high'])
        ];
    }
}
