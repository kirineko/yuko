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
    return view('index');
});

Route::get('/yuko', function () {
    return view('yuko');
});

Route::get('/check_1', function () {
    return view('check');
});

Route::get('/check_2', function () {
    return view('check_2');
});

Route::get('/site', function() {
    return view('site');
});
