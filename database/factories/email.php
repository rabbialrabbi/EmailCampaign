<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\email;
use Faker\Generator as Faker;

$factory->define(email::class, function (Faker $faker) {
    return [
        'user_id'=> 1,
        'list_id'=> 1,
        'email'=> $faker->safeEmail
    ];
});
