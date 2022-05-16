<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Train;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Train::class, function (Faker $faker) {
    return [
        'train_company' => $faker->company,
        'departure_station' => $faker->city,
        'arrival_station' => $faker->city,
        'departure_time' => $faker->dateTimeBetween('now', '+1 day'),
        'arrival_time' => $faker->dateTimeBetween('+1 day', '+2 day'),
        'train_code' => $faker->unique()->randomNumber(5, true),
        'number_of_carriages' => $faker->randomNumber(3, false),
        'in_time' => $faker->boolean(),
        'deleted' => $faker->boolean(),
    ];
});
