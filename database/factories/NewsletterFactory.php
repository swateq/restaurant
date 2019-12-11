<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Newsletter;
use Faker\Generator as Faker;

$factory->define(Newsletter::class, function (Faker $faker) {
    return [
        'email' => $faker->email(),
        'active' => $faker->boolean($chanceOfGettingTrue = 75)
    ];
});
