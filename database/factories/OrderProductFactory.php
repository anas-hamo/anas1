<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order_Product;
use Faker\Generator as Faker;



$factory->define(Order_Product::class, function (Faker $faker) {


    return [


        'OrderID' => $faker->numberBetween(1,15),
        'ProductCode' => $faker->numberBetween(1,15),
        'Qty' => $faker->randomDigit,
        'PriceEach' => $faker->randomNumber(),


    ];
});
