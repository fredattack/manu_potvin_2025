<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Realisation>
 */
class RealisationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'category' => $this->faker->randomElement(['CHASSIS','MOUSTIQUAIRE','PORTE DE GARAGE','PERGOLA']),
            'published' => $this->faker->boolean(30),
        ];
    }
}
