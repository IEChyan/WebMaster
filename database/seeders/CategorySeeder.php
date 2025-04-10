<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::insert([
            ['name' => 'Smartphones'],
            ['name' => 'Laptops'],
            ['name' => 'Accessories'],
            ['name' => 'Cameras'],
        ]);
    }
}
