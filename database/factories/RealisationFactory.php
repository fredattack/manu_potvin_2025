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
            'category' => json_encode(
                [$this->faker->randomElement( ['home',
            'chassis',
            'porte_de_garage',
            'pergolas',
            'moustiquaires'])
            ]),
            'published' => $this->faker->boolean(30),
        ];
    }
}
