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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/SearchPlaces/SearchCars', ['uses' => 'CarController@searchCars']);
$router->post('/SearchPlaces/SearchTrains', ['uses' => 'CarController@searchTrains']);
$router->post('/SearchPlaces/GetTrainRoutes', ['uses' => 'CarController@getTrainRoutes']);
$router->get('/Login/GetToken', ['uses' => 'AuthController@getToken']);
$router->post('/Login/SetToken', ['uses' => 'AuthController@setToken']);
