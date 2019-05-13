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

$router->group(['prefix' => 'authors-api/v1'], function ($router) {
    $router->get('/all', 'AuthorController@index');
    $router->post('/add', 'AuthorController@store');
    $router->get('/get/{author}', 'AuthorController@show');
    $router->put('/update/{author}', 'AuthorController@update');
    $router->patch('/update/{author}', 'AuthorController@update');
    $router->delete('/delete/{author}', 'AuthorController@destroy');
});

$router->group(['prefix' => 'books-api/v1'], function ($router) {
    $router->get('/all', 'BookController@index');
    $router->post('/add', 'BookController@store');
    $router->get('/get/{book}', 'BookController@show');
    $router->put('/update/{book}', 'BookController@update');
    $router->patch('/update/{book}', 'BookController@update');
    $router->delete('/delete/{book}', 'BookController@destroy');
});
