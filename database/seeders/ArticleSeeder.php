<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\tags;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {


        $python = Tags::create([
            'name'=> 'python'
        ]);

        $programming = Category::create([
            'name'=> 'programming'
        ]);

        $php = Tags::create([
            'name'=> 'php'
        ]);

        $javascript = Tags::create([
            'name'=> 'javascript'
        ]);

        $sport = Category::create([
            'name'=> 'sport'
        ]);

        Article::factory()->count(5)->create([
            'category_id'=>$programming->id,
            'tag_id'=>$python->id,
        ]);

        Article::factory()->count(5)->create([
            'category_id'=>$programming->id,
            'tag_id'=>$php->id,
        ]);

        Article::factory()->count(5)->create([
            'category_id'=>$programming->id,
            'tag_id'=>$javascript->id,
        ]);
    }
}
