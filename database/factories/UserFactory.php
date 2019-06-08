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
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'birth' => $faker->date('Y-m-d', now()->addYears(-18)),
        'phone_verified_at' => now(),
        'remember_token' => Str::random(10),
    ];
});
