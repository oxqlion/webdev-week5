<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->word,
            'type' => fake()->randomElement(['Physical', 'Magic', 'Defense']),
            'damage' => fake()->randomNumber(2),
            'speed' => fake()->randomNumber(2),
            'defense' => fake()->randomNumber(2),
            'passive' => fake()->word,
        ];
    }
}
