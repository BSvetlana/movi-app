<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->text(),
        'director' => $faker->name,
        'imageUrl' => $faker->imageUrl(),
        'duration' => $faker->numberBetween(1-500),
        'releaseDate'=>$faker->date(),
        'genre'=>$faker->text(),
    ];
});
