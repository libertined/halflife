<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Inspector;
use Faker\Generator as Faker;

$factory->define(Inspector::class, function (Faker $faker) {

    $passport = [
        $faker->randomNumber(4),
        ' ',
        $faker->randomNumber(6),
    ];

    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'surname' => $faker->firstName . 'chenko',
        'phone' => '+7' . $faker->randomNumber(3) . $faker->randomNumber(7),
        'password' => $faker->password,
        'passport' => join('', $passport),
    ];
});
