<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// Homepage
$router->get('/', '\App\Main\Controllers\Home@homePage');

// URL retriever
$router->post('/get', '\App\Main\Controllers\Home@getURL');