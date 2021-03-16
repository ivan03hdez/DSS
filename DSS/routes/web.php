<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/layouts/admin');
});
Route::get('/products', 'ProductController@list');
Route::get('/products/{id}', 'ProductController@get');
Route::get('/users', 'UserControllr@list');



Route::get('/', function(){return view('exampleView');});