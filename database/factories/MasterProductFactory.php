<?php

namespace Database\Factories;

use App\Models\MasterProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<MasterProduct>
 */
class MasterProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'image' => $this->faker->imageUrl(),
            'description' => $this->faker->sentence(),
            'slug' => $this->faker->unique()->slug(),
        ];
    }
}
