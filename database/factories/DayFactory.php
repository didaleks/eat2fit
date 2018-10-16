<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Day::class, function (Faker $faker) {
    return [
        'number' => rand(1,30),
        'diet_id' => 1
    ];
});
