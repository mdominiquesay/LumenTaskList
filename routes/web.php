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

$router->get('/', function ()  {
    return view('home');
});

$router->get('/user/{name}', function ($name) {
    return ['created'=>true];
});
$router->post('/user', 'TaskController@show');
$router->post('/submit-form', [
    'as' => 'submitForm', 'uses' => 'TaskController@submit'
]);
$router->get('/form', 'TaskController@showForm');
$router->get('/showData', ['as' => 'showData', 'uses' => 'TaskController@showData']);
$router->get('/edit/{id}', 'TaskController@editForm');
$router->post('/update', 'TaskController@update');
$router->get('/delete/{id}', 'TaskController@delete');