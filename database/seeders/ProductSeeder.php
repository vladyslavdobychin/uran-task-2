<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            ['name' => 'Smartphone', 'description' => 'A high-end smartphone', 'price' => 699.99, 'product_category_id' => 1],
            ['name' => 'Laptop', 'description' => 'A powerful laptop', 'price' => 1299.99, 'product_category_id' => 1],
            ['name' => 'T-shirt', 'description' => 'A comfortable cotton t-shirt', 'price' => 19.99, 'product_category_id' => 3],
            ['name' => 'Blender', 'description' => 'A high-speed blender', 'price' => 49.99, 'product_category_id' => 4],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
