<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(
            [
                'name' => 'nasi lemak',
                'slug' => 'nasi-lemak',
                'category_id' => 1,
                'content' => 'makanan kegemaran rakyat malaysia. merupakan makanan tradisional masyarakat melayu.',
                'weight' => 100,
                'price' => 1,
            ]
        );

        Product::create(
            [
                'name' => 'air asam jawa',
                'slug' => 'air-asam-jawa',
                'category_id' => 2,
                'content' => 'minuman yang sangat menyegarkan. Bagus untuk mereka yang hilang suara asbab menjerit.',
                'weight' => 50,
                'price' => 2.50,
            ]
        );
    }
}