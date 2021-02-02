<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'director' => $faker->name,
        'imageUrl' => $faker->imageUrl,
        'duration' => rand(10,300),
        'release_date' => $faker->date,
        'genre' => $faker->word
    ];
});