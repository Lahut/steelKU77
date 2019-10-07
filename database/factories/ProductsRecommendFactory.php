<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Recommend;
use Faker\Generator as Faker;

$factory->define(Recommend::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->realText(20), 
        'detail' => $faker->realText(300)
    ];
});
