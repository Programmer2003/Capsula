<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductTag>
 */
class ProductTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [];
    }

    public function product_tag($product_id = 1, $tag_id = 1)
    {
        return $this->state(function ($attributes) use ($product_id, $tag_id) {
            return [
                'product_id' => $product_id,
                'tag_id' => $tag_id
            ];
        });
    }
}
