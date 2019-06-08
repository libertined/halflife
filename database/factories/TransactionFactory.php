<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Transaction;
use Faker\Generator as Faker;

$factory->define(Transaction::class, function (Faker $faker) {
    return [
        'cost' => $faker->randomElement([20.0, 35.0, 45.0, 65.0, 100.0]),

        //— lat — широта, lon — долгота;
        'geo_data' => json_encode([
            'lat' => rand(30,36) . '.329522',
            'lon' => rand(30,36) .'.943493'
        ]),
    ];
});
