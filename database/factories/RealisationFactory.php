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
            'category' => [
                $this->faker->randomElement([
                    'home',
                    'chassis',
                    'porte_de_garage',
                    'pergolas',
                    'moustiquaires'
                ])
            ],
            'published' => $this->faker->boolean(30),
            'favorite' => $this->faker->boolean(20),
            'place' => $this->faker->city,
            'customer' => $this->faker->name,
            'date' => $this->faker->date(),
            'ordre' => $this->faker->numberBetween(1, 100),
        ];
    }
}
