<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $originalPrice = $this->faker->randomFloat('2', 0, 2);

        return [
            'name' => fake()->unique()->sentence(2),
            'description' => fake()->text,
            'price' => $originalPrice,
            'image_url' => fake()->imageUrl($width = 200, $hight = 200),
        ];
    }
}
