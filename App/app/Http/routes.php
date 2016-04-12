<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::post('/newsletterok', 'NewsletterController@insert');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/classement', 'ClassementController@index');

Route::auth();


Route::get('/home', 'HomeController@index');
