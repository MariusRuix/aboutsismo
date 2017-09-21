<?php

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
    ];
});

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => '<p>'.implode('</p><p>', $faker->paragraphs(10)).'</p>',
        'category_id' => function () {
            return factory(Category::class)->create()->id;
        },
        'author_id' => function () {
            return factory(User::class)->create()->id;
        },
    ];
});
