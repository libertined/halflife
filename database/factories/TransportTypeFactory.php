<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TransportType;
use Faker\Generator as Faker;

$factory->define(TransportType::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['Автобус', 'Троллейбус', 'Трамвай', 'Электробус', 'Водное такси']),
        'title' => $faker->randomElement(['Автобус', 'Троллейбус', 'Трамвай', 'Электробус', 'Водное такси']),
    ];
});
