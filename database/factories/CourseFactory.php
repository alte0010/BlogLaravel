<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'course_id' => $faker->randomDigitNotNull,
        'name' => $faker->name,
        'ecs' => $faker->randomDigitNotNull
    ];
});
