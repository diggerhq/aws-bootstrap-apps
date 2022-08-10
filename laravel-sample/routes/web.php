<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return file_get_contents(__DIR__ . '/../resources/pages/index.html');
});

$router->get('/css', function () use ($router) {
    return file_get_contents(__DIR__ . '/../resources/pages/index.css');
});

$router->get('/logo', function () use ($router) {
    return file_get_contents(__DIR__ . '/../resources/pages/logo.png');
});
