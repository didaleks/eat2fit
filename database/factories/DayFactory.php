<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Day::class, function (Faker $faker) {
    return [
        'number' => rand(1, 30),
        'diet_id' => 1
    ];
});

$factory->afterCreating(\App\Models\Day::class, function ($day, $faker) {
    $count = rand(0,3);
    for($i=0;$i<$count;$i++){
        $day->eatings()->save(factory(\App\Models\Eating::class)->create(['eating_type_id' => $i]));
    }
});