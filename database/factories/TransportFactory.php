<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Transport;
use Faker\Generator as Faker;

$factory->define(Transport::class, function (Faker $faker) {

    $chars = ['A','B','E','K','M','N','O','P','C','T','X'];

    $number = [
        $faker->randomElement($chars),
        $faker->randomElement($chars),
        $faker->randomNumber(1),
        $faker->randomNumber(1),
        $faker->randomNumber(1),
        $faker->randomElement($chars),
        $faker->randomElement(['198','777','98', $faker->randomNumber(2)])
    ];

    return [
        //Транспортный номер
        'number' => join('', $number),
    ];
});
