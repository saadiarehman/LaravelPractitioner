<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Podcast;
use Faker\Generator as Faker;

$factory->define(Podcast::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
    ];
});
