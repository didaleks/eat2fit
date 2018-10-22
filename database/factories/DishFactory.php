<?php

use Faker\Generator as Faker;


$factory->define(\App\Models\Dish::class, function (Faker $faker) {
    $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));
    return [
        'name' => $faker->foodName(),
        'published' => true,
        'content' => $faker->text(200)
    ];
});
