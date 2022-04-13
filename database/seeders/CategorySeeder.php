<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $category = new Category;
        $category->name = 'Căn hộ dịch vụ';
        $category->price = '600';
        $category->save();

        $category = new Category;
        $category->name = 'Studio';
        $category->price = '500';
        $category->save();

        $category = new Category;
        $category->name = 'Homestay';
        $category->price = '620';
        $category->save();

        $category = new Category;
        $category->name = 'Biệt thự';
        $category->price = '1200';
        $category->save();


        $category = new Category;
        $category->name = 'Chung cư';
        $category->price = '550';
        $category->save();
    }
}
