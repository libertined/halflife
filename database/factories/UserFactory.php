<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'surname' => $faker->firstName . 'chenko',
        'phone' => '+7' . $faker->randomNumber(3) . $faker->randomNumber(7),
        'password' => $faker->password,
        'birth' => $faker->date('Y-m-d', now()->addYears(-18))
    ];
});
