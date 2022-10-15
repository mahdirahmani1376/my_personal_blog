<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\Category;
use App\Models\tags;
use Illuminate\Database\Seeder;
use Schema;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        Schema::disableForeignKeyConstraints();
        Article::truncate();
        Tags::truncate();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $this->call([
            ArticleSeeder::class,
        ]);
    }
}
