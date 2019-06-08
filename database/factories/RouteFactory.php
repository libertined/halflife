<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Route;
use Faker\Generator as Faker;

$factory->define(Route::class, function (Faker $faker) {
    return [
        'number' => $faker->randomNumber(3),
    ];
});
