<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author' => $this->faker->name(),
            'content' => $this->faker->text(),
            'city' => $this->faker->city(),
            'rating' => $this->faker->numberBetween(1, 5),
            'published' => $this->faker->boolean(70),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
