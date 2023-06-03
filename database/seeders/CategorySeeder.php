<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Models\Category();
        $category->name = 'Cars and Bikes';
        $category->slug = 'cars-and-bikes';
        $category->description = 'Win a car or bike';
        $category->save();

        $category = new \App\Models\Category();
        $category->name = 'Tech and Luxury';
        $category->slug = 'tech-and-luxury';
        $category->description = 'Win a tech or luxury item';
        $category->save();

        $category = new \App\Models\Category();
        $category->name = 'Tax Free Cash';
        $category->slug = 'tax-free-cash';
        $category->description = 'Win tax free cash';
        $category->save();
    }
}
