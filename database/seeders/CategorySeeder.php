<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Frontend', 'Backend', 'Fullstack','Designed','Dev0ps'];

        foreach($categories as $cat){
            $category = new Category();

            $category->name = $cat;
            $category->slug = Str::slug($cat, '-');
            $category->save();



        }
    }
}
