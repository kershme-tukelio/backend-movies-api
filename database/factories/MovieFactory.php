<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'director' => $faker->name,
    ];
});

// Str::random(10)
// $table->bigIncrements('id');
// $table->string('title');
// $table->string('director');
// $table->string('imageUrl');
// $table->integer('duration');
// $table->date('release_date');
// $table->string('genre');
// $table->timestamps();