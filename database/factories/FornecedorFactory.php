<?php

use Faker\Generator as Faker;

$factory->define(App\Fornecedor::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'cidade' => $faker->city,
        'endereco' => $faker->address,
        'contato' => $faker->phoneNumber
    ];
});
