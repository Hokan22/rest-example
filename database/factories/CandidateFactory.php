<?php

$factory->define(App\Candidate::class, function (Faker\Generator $faker) {
    return [
        'vorname' => $faker->firstName,
        'nachname' => $faker->lastName,
        'firma' => $faker->company,
        'aktuelle_position' => $faker->jobTitle,
    ];
});