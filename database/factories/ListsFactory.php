<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\lists;
use Faker\Generator as Faker;

$factory->define(lists::class, function (Faker $faker) {
    return [
        'name'=>$faker->word
    ];
});
