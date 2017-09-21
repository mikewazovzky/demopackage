<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Mikewazovzky\Demopackage\Models\Item::class, function (Faker\Generator $faker) {
    return [
        'name' => str_replace('\'', ' ', $faker->name),
        'description' => $faker->sentence,
    ];
});
