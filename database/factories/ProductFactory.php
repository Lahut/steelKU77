<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //'image' => $faker->image(public_path('images'),400,300, null, false),
        //'image' => $faker->image('public/storage/images',640,480, null, false),
        'title' => $faker->realText(20), 
        'detail' => $faker->realText(300),
        'view_count' => $faker->numberBetween(0, 10000),
        'order_count' => $faker->numberBetween(0, 10000),
        'price' => $faker->numberBetween(1000, 10000)
    ];
});