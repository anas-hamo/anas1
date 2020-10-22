<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Office;
use Faker\Generator as Faker;


$factory->define(Office::class, function (Faker $faker) {


    return [

        'City' => $faker->city,
        'Phone' => $faker->randomNumber(5),
        'Address1' => $faker->address,
        'Address2' => $faker->address,
        'State' => $faker->state,
        'Country' => $faker->country,
        'PostalCode' => $faker->randomNumber(6),
        'Territory' => $faker->country,

    ];
});
