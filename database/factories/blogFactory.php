<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'author_id' => 1,
        'title' => $faker->sentence($nbWords = 5, $variableNbWords = true),
        'slug' => $faker->slug, // secret
        'excerpt' => $faker->paragraph($nbSentences = 2, $variableNbSentences = true),
        'body' => $faker->text($maxNbChars = 200),
        'category_id' => $faker->numberBetween($min = 1, $max = 5)
    ];
});
