<?php

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $video = '<iframe width="100%" height="500" src="https://www.youtube.com/embed/S_CYdTmj7lA" frameborder="0" allowfullscreen></iframe>';
        $authors = User::count();
        $categories = Category::count();

        factory(Article::class, 20)
            ->make(['video' => $video, 'author_id' => null, 'category_id' => null])
            ->each(function (Article $article) use ($authors, $categories) {
                $article
                    ->author()->associate(rand(1, $authors))
                    ->category()->associate(rand(1, $categories))
                    ->save();
            });
    }
}
