<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->word();
        return [
            'name' => $name,
            'slug' => $name,
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'description' => $this->faker->paragraph(),
            'category_id' => Category::all()->random()->id,
            'images' => [$this->faker->imageUrl($width = 510, $height = 680), $this->faker->imageUrl($width = 510, $height = 680)],
        ];
    }
}
