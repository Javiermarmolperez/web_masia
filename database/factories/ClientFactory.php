<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName(),
        'email' => $faker->unique()->safeEmail(),
        'phone_number' => $faker->phoneNumber(),
        'guests' => $faker->numberBetween(1,4),
        'room_id' => $faker->unique()->numberBetween(1,3),
        'check_in_date' => $faker->dateTimeThisYear($min = 'now', $timezone = 'Europe/Madrid'),
        //'check_out_date' => $faker->dateTimeThisYear($min = 'check_in_date + 2 days', $timezone = 'Europe/Madrid'),
    ];
});