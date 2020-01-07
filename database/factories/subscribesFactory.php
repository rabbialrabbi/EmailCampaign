<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\subscribes;
use Faker\Generator as Faker;

$factory->define(subscribes::class, function (Faker $faker) {
    return [
        'user_id'=> 1,
        'list_id'=> 1,
        'email'=> $faker->email
    ];
});
