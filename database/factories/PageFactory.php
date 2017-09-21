<?php

use App\Models\Page;
use Faker\Generator as Faker;

$factory->define(Page::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'content' => '<p>'.implode('</p><p>', $faker->paragraphs(10)).'</p>',
    ];
});
