<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\items;
class ItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'amount' => $this->faker->numberBetween($min = 10000, $max = 500000),
            'id_categories' => $this->faker->numberBetween($min = 1, $max = 50),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
