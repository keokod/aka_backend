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

$app->get('/', function () use ($app) {
    return $app->version();
});


$app->get('/liste_membre','UserController@getUser');
$app->get('/profilMembre/{id}','UserController@getMembre');

$app->get('/liste_sujet','UserController@getListeSujet');
$app->get('/sujet/{id}','UserController@getFicheSujet');
$app->get('/topic/{id}','UserController@getTopic');