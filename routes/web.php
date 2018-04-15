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

$router->get('/', function() use ($router) {
    return "Lumen RESTful API for Coding Task";
});

$router->group(['prefix' => 'api'], function($router)
{
    $router->get('candidate', 'CandidateController@index');

    $router->get('candidate/{id}', 'CandidateController@getcandidate');

    $router->post('candidate', 'CandidateController@createCandidate');

    $router->put('candidate/{id}', 'CandidateController@updateCandidate');

    $router->delete('candidate/{id}', 'CandidateController@deleteCandidate');

    $router->post('candidate/find', 'CandidateController@findCandidate');
});