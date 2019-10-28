<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(2, 3),
        'product_id' => $faker->numberBetween(1, 21),
        'amount' => $faker->numberBetween(100, 1000),
        'address' => $faker->realText(100),
        'detail' => $faker->realText(200),
    ];
});
