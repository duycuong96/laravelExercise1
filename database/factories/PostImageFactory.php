<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PostImage;
use Faker\Generator as Faker;

$factory->define(PostImage::class, function (Faker $faker) {
    return [
        'post_id' =>  $faker->randomDigit,
        'url' => $faker->imageUrl($width = 640, $height = 480),
    ];
});
