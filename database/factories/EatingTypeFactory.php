<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\EatingType::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'slug' => $faker->slug,
        'sort' => rand(0,3)
    ];
});
