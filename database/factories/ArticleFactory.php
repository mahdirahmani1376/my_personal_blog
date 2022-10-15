<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Tags;
use App\Models\Article;
use Database\Seeders\CategorySeeder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

//        $tags = Tags::create([
//            'name'=> 'k'
//        ]);
//
//        $category = Category::create([
//            'name'=> fake()->text('20')
//        ]);

        return [
            'title'=> fake()->text(40),
            'full_text'=> fake()->text(),
            'image'=>fake()->imageUrl(),
//            'category_id'=>$category->id,
//            'tag_id'=>$tags->id,
        ];
    }
}
