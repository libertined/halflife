<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tariff;
use Faker\Generator as Faker;

$factory->define(Tariff::class, function (Faker $faker) {
    return [
        'cost' => $faker->randomElement([20.0, 35.0, 45.0, 65.0, 100.0]),
        'title' => $faker->randomElement(['Стандартный', 'Зона №' . rand(1,3)]),
        'description' => $faker->sentence(rand(4, 10))
    ];
});
