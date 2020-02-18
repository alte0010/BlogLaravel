<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Assignment;
use Faker\Generator as Faker;

$factory->define(Assignment::class, function (Faker $faker) {
    return [
        'course_id' => factory(\App\Course::class),
        'name' => $faker->sentence,
        'weight' => $faker->randomDigitNotNull,
        'grade' => $faker->numberBetween($min = 1, $max = 10)
    ];
});
