<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Movie::class, function (Faker $faker) {

        $values = collect([
        'Action',
        'Comedy',
        'Drama',
        'Horror',
        'Western',
        'Thriller',
        'Animation',
        'Documentary'
    ]);



    return [
        'title' => $faker->name,
        'director' => $faker->firstName . " " . $faker->lastName,
        'imageUrl' => $faker->imageUrl(),
        'duration' => $faker->numberBetween(1-500),
        'releaseDate'=>$faker->date(),
        'genre'=>$values[rand(0, count($values) - 1)],
    ];
});
