<?php

use Faker\Generator as Faker;

$factory->define(App\cicle::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'img' => $faker->sentence,
    ];
});
