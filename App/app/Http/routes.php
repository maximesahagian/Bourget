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

Route::get('/jeu' , 'JeuController@index');

Route::post('apply/upload', 'Uploaded@upload');

Route::get('logout', 'JeuController@logout');

Route::get('jeu/simulator', array(
    'as'    => 'simulator',
    'uses'  => 'JeuController@simulator'
));

Route::post('/newsletterok', 'NewsletterController@insert');

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/score', 'JeuController@setScore');

Route::get('/life', 'JeuController@setLife');

Route::get('/time', 'JeuController@setTime');

Route::get('/jeu/classement', 'ClassementController@index');

Route::get('/jeu/profile', 'ProfileController@index');

Route::get('/jeu', 'JeuController@index');


