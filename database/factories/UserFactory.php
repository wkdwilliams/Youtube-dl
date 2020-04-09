<?php

use App\User\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'id'    => $faker->uuid,
        'name'  => $faker->name,
        'email' => $faker->email,
    ];
});
