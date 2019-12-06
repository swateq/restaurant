<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reservation;
use Faker\Generator as Faker;

$factory->define(Reservation::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'start' => '2019-12-12 15:00:00'
    ];
});
