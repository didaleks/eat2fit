<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Eating::class, function (Faker $faker) {
    return [
        'eating_type_id' => 0,
        'day_id' => 0
    ];
});
