<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
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
        'name' => $faker->text(60),
        'director' => $faker->name,
        'image_url' => $faker->imageUrl($width = 200, $height = 200),
        'duration'=> $faker->numberBetween(60,180),
        'release_date'=> $faker->date($format = 'Y-m-d', $max = 'now'),
        'genres'=> $values->random(3)

    ];
});

