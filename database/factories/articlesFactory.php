<?php

use Faker\Generator as Faker;

$factory->define(App\article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'image' => $faker->sentence,
        'cicle_id' => \App\cicle::all()->random()->id,
    ];
});
