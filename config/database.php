<?php

use Illuminate\Support\Str;

return [

    'default' => env('DB_CONNECTION', 'mysql'),
    'migrations' => 'migrations',
    'connections' => [

        'mysql' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', '10.5.0.12'),
            'database'  => env('DB_DATABASE', 'Main'),
            'username'  => env('DB_USERNAME', 'user'),
            'password'  => env('DB_PASSWORD', 'fcuk'),
        ],

    ]
];