<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'seolink' => $faker->sentence,
        'content' => $faker->text($maxNbChars = 200),
        'active' => $faker->boolean($chanceOfGettingTrue = 50),
        'created_at' => $faker->dateTime($max = 'now', $timezone = null)
    ];
});
