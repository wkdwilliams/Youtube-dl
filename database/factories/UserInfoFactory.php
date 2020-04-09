<?php

use App\User\Models\UserInfo;
use Faker\Generator as Faker;

$factory->define(UserInfo::class, function (Faker $faker) {
    return [
        'id'    => $faker->uuid,
        'name'  => $faker->name,
        'email' => $faker->email,
    ];
});
