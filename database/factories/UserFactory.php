<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'age' => $faker->numberBetween($min = 1, $max = 120),
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$FeQsWMDDEGaGfZSQiHc5x.vXNw0uOu8AYCL9gR22.VT9B0TosoRUC', // 123qweasd
        'country' => $faker->country,
        'city' => $faker->city,
        'street' => $faker->streetName,
        'postcode' => $faker->numberBetween($min = 10000, $max = 99999),
        'homenumber' => $faker->numberBetween($min = 1, $max = 5000),
        'sex' => $faker->randomElement(['male', 'female', 'other']),
        'remember_token' => str_random(10),
    ];
});
