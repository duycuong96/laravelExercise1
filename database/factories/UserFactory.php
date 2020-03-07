<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'dob' => $faker->date(),
        'password' => bcrypt(123456),
        'avatar' => $faker->imageUrl($width = 640, $height = 480),
        'role' => rand(1,2),
    ];
});
