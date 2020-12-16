<?php

use Faker\Generator as Faker;

$factory->define(App\applied::class, function (Faker $faker) {
    return [
        'user_id' => \App\User::all()->random()->id,
        'offer_id' => \App\offer::all()->random()->id,
    ];
});
