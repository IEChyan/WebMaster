<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'iPhone 14',
            'description' => 'Latest Apple smartphone with A15 Bionic chip.',
            'price' => 999.99,
            'image' => 'iphone14.jpg',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Samsung Galaxy S23',
            'description' => 'Flagship Samsung phone with AMOLED display.',
            'price' => 849.99,
            'image' => 'galaxy-s23.jpg',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'iPhone 15 Pro Max',
            'price' => 1199.99,
            'image' => 'products/iphone15pro.jpg',
            'image' => 'iphone15pro.jpg',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Samsung Galaxy S24 Ultra',
            'price' => 1299.99,
            'image' => 'products/galaxys24ultra.jpg',
            'image' => 'galaxy-s24U.jpg',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Google Pixel 8 Pro',
            'price' => 999.99,
            'image' => 'products/pixel8pro.jpg',
            'image' => 'pixel8pro.jpg',
            'category_id' => 1
        ]);
    }
}
