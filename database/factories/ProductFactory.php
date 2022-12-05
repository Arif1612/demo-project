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
    public function definition()
    {
        return [
            'name' => fake()->sentence(5),
            'sku' => fake()->text(50),
            'img' => fake()->imageUrl(360, 360, 'products', true, 'gold', true, 'jpg'),
            'qty' => fake()->numberBetween(0, 10000),
            'price' => fake()->randomFloat(2, 500, 50000),
            'markup' => fake()->randomFloat(2, 1, 1000),
            'sync' => fake()->numberBetween(0, 1),
            'status' => fake()->numberBetween(0, 1),
            'store_id' => fake()->numberBetween(1, 1000)
        ];
    }
}
