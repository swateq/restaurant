<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Slider;
use Faker\Generator as Faker;

$factory->define(Slider::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'position' => '1',
        'active' => '1',
        'dateFrom' => '2008-08-02 18:01:16' ,
        'dateTo' => '2020-09-19 03:50:18',
        'file' => $faker->image('public/storage/images',640,480, null, false),
    ];
});
