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
    return $router->app->version();
});

$router->group(['prefix' => 'api/kampus'], function () use ($router) {
    $router->get('/', 'DataKampusController@index');
    $router->get('/{id}', 'DataKampusController@show');
    $router->post('/', 'DataKampusController@store');
    $router->put('/{id}', 'DataKampusController@update');
    $router->delete('/{id}', 'DataKampusController@destroy');
});
