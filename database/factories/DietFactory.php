<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Diet::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'published' => true,
        'content' => $faker->text(200),
        'slug' => $faker->slug,
        'days_count' => rand(1,30),
        'calories' => rand(1500,3000),
    ];
});

$factory->afterCreating(\App\Models\Diet::class, function ($diet, $faker) {
    for ($i=1; $i<=$diet->days_count; $i++) {
        $diet->days()->save(factory(\App\Models\Day::class)->create(['number' => $i]));
    }
});
