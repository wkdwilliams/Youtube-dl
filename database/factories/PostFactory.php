<?php

use App\User\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'id'        => $faker->uuid,
        'content'   => "My name is ".$faker->name.", and my mac address is: ".$faker->macAddress,
    ];
});
