<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TransportCompany;
use Faker\Generator as Faker;

$factory->define(TransportCompany::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'requisites' => $faker->companyEmail,
    ];
});
