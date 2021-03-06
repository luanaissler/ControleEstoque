<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'user_id' => \App\User::all()->random()->id,
        'text' => $faker->sentence(10),
    ];
});
