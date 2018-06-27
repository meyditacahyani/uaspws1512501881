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

$app->get('/Mahasiswa', 'MahasiswaController@index');
$app->get('/Mahasiswa/{nim}', 'MahasiswaController@show');
$app->post('/Mahasiswa', 'MahasiswaController@store');
$app->put('/Mahasiswa/{nim}', 'MahasiswaController@update');
$app->delete('/Mahasiswa/{nim}', 'MahasiswaController@destroy');
