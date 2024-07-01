<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;


class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Electronics'],
            ['name' => 'Books'],
            ['name' => 'Clothing'],
            ['name' => 'Home Appliances'],
        ];

        foreach ($categories as $category) {
            ProductCategory::create($category);
        }
    }
}
