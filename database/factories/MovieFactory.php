<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    $values = collect([
        'Horror',
        'Western',
        'Thriller',
        'Animation',
        'Documentary',
        'Action',
        'Comedy',
        'Drama'
    ]);
    return [
        'name' => $faker->title,
        'director' => $faker->name,
        'imageUrl' => $faker->imageUrl($width = 200, $height = 200),
        'duration'=> $faker->numberBetween($min = 60, $max = 180),
        'releaseDate'=> $faker->date($format = 'Y-m-d', $max = 'now'),
        'genres'=> $values->random(3)

    ];
});

