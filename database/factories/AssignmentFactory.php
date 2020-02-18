<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Assignment;
use Faker\Generator as Faker;

$factory->define(Assignment::class, function (Faker $faker) {
    return [
        'course_id' => factory(\App\User::class),
        'name' => $faker->sentence,
        'weight' => $faker->sentence,
        'grade' => $faker->paragraph
    ];
});
