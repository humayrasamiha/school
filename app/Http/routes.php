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

Route::get('/', function () {

    return view('welcome');
});

Route::get('index', 'School@index');

Route::get('login', 'Admin@login');

Route::post('login2', 'Admin@login2');

Route::get('addnews', 'Admin@addnews');

Route::post('addNew', 'Admin@addNew');

Route::get('maintainnews', 'Admin@maintainnews');

Route::get('deletes/{id}','Admin@delete');


//Route::get('maintainnews', 'Admin@maintainnews');

Route::get('addnotice', 'Admin@addnotice');

Route::post('addNotice', 'Admin@addNotice');