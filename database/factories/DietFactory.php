<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Diet::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'published' => true,
        'content' => $faker->text(200),
        'slug' => $faker->word,
    ];
});
