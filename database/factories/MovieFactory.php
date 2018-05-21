<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'director' => $faker->firstName . "" . $faker->lastName,
        'imageUrl' => $faker->imageUrl($width = 640, $height = 480),
        'duration' => $faker->NumberBetween(30-180),
        'releaseDate'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'genre'=>$faker->name,
    ];
});
