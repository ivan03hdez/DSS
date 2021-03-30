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

/////////////Rutas que usara el administrador//////
Route::get('/products', 'ProductController@list');
Route::get('/products/{id}', 'ProductController@get');

Route::get('/users', 'UserController@list');
Route::get('/users/{id}', 'UserController@get');


Route::get('/promotions', 'PromotionController@list');
Route::get('/promotions/{id}', 'PromotionController@get');

Route::get('/orders/{id}', 'OrderController@get');
Route::get('/orders', 'OrderController@list');
Route::get('/orders/user{id}', 'OrderController@filter');

Route::get('/orderLines/{id}', 'OrderLineController@get');
Route::get('/orderLines', 'OrderLineController@list');

Route::get('/favoriteLists/{id}', 'FavoriteListController@get');
Route::get('/favoriteLists', 'FavoriteListController@list');
Route::get('/favoriteLists/user{userId}', 'FavoriteListController@filter');

Route::get('/shoppingCarts/{id}', 'ShoppingCartController@get');
Route::get('/shoppingCarts', 'ShoppingCartController@list');
///////////////////////cada metodo del controlador tiene que tener definida una ruta//////////////

Route::get('/e', 'exampleController@get');

Route::get('/e', function () {return view('/exampleView');});

