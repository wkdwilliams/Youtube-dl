<?php

use App\DownloadedVideos\Models\DownloadedVideos;
use Faker\Generator as Faker;

$factory->define(DownloadedVideos::class, function (Faker $faker) {
    return [
        'id'    => $faker->uuid,
        'url'   => $faker->email,
    ];
});
