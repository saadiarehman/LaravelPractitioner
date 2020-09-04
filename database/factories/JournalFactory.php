<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Journal;
use Faker\Generator as Faker;

$factory->define(Journal::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        
    ];
});
