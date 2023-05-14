<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rating' => $this->faker->numberBetween(1, 5),
            'body' => $this->faker->paragraph(1),
            'name' => $this->faker->userName(),
            'email' => $this->faker->freeEmail(),
            'product_id' => Product::all()->random()->id,
        ];
    }
}
