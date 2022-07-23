<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
       Category::truncate();

       $categories = ['Sports', 'Entertainment', 'Politics', 'Fashion'];

       // And now, let's create a few articles in our database:
       foreach ($categories as $categoryName) {
        Category::create([
               'name' => $categoryName
           ]);
       }
    }
}
