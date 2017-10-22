<?php

use Faker\Generator as Faker;

$factory->define(App\Models\DB\Post::class, function (Faker $faker) {
    return [
        'id' => \App\Models\Helper\Helper::generateId(),
        'author_id' => 1,
        'title' => $faker->text($maxNbChars = 60),
        'url' => 'yazi-' . random_int(1,10000),
        'status' => 'published',
        'content' => $faker->randomHtml(2,3),
        'header_image_url' => $faker->imageUrl(),
        'private' => false,
        'view_count' => random_int(1,99999),
        'comment_count' => 0,
        'published_date' => $faker->dateTime(),
        'description' => $faker->text($maxNbChars = 160),
        'canonical' => 'yazi-' . random_int(1,10000),
        'deleted' => false
    ];
});
