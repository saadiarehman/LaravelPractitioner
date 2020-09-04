<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Uselink;
use Faker\Generator as Faker;

$factory->define(Uselink::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
    ];
});
