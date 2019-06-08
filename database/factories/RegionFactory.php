<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Region;
use Faker\Generator as Faker;

$factory->define(Region::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(rand(1,3)),
        'fias_code' => md5(random_bytes(10)),
    ];
});
