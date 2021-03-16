<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'category' => $faker->word(),
        'description' => $faker->sentence(5),
        'date_and_time' => $faker->dateTimeBetween('+0 days', '+2 years'),
    ];
});
