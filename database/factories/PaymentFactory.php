<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Payment;
use Faker\Generator as Faker;




$factory->define(Payment::class, function (Faker $faker) {




    return [


        'CheckNum' => $faker->randomNumber(5),
        'CustomerID' => $faker->numberBetween(1,15),
        'PaymentDate' => $faker->dateTime,
        'Amount' => $faker->randomNumber(),
    ];
});
