<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Talks;
use Faker\Generator as Faker;

$factory->define(Talks::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
    ];
});
