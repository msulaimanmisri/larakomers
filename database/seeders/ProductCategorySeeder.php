<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'makanan',
            'slug' => 'makanan'
        ]);

        Category::create([
            'name' => 'minuman',
            'slug' => 'minuman'
        ]);
    }
}