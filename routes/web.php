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

$router->get('/user/{name}', function ($name) {
    return ['created'=>true];
});
$router->post('/user', 'UserController@show');
$router->post('/submit-form', [
    'as' => 'submitForm', 'uses' => 'UserController@submit'
]);
$router->get('/form', 'UserController@showForm');
$router->get('/showData', 'UserController@showData');
$router->get('/form2', function () {
  
    return view('form');
});