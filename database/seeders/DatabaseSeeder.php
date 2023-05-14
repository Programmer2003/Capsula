<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(10)->create();

        $tags = [
            'new',
            'sale',
        ];

        foreach ($tags as $tag) {
            Tag::create([
                'name' => $tag
            ]);
        }

        $products = \App\Models\Product::factory(100)->create();

        foreach ($products as $product) {
            if (random_int(0, 1) == 0) {
                \App\Models\ProductTag::factory()->product_tag($product->id, 1)->create();
            }
            if (random_int(0, 1) == 0) {
                \App\Models\ProductTag::factory()->product_tag($product->id, 2)->create();
            }
        }

        \App\Models\Review::factory(500)->create();
    }
}
