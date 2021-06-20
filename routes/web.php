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

$router->get(
    '/',
    [
        'uses' => 'MainController@home',
        'as'   => 'main-home'
    ]
);


$router->get(
    '/dog/races',
    [
        'uses' => 'RacesController@list',
        'as'   => 'races-list'
    ]
);

$router->get(
    '/contact',
    [
        'uses' => 'MainController@contact',
        'as'   => 'main-contact'
    ]
);

$router->get(
    '/advices',
    [
        'uses' => 'MainController@advices',
        'as'   => 'main-advices'
    ]
);


$router->get(
    '/dog/races/{id}',
    [
        'uses' => 'DogController@desc',
        'as'   => 'dog-desc'
    ]
);
