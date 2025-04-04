<?php

namespace Database\Factories;

use App\Models\CustomerData;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CustomerDataFactory extends Factory
{
    protected $model = CustomerData::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'address' => $this->faker->address(),
            'email' => $this->faker->companyEmail(),
            'phone' => $this->faker->phoneNumber(),
            'notes' => $this->faker->paragraphs(2, true),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
