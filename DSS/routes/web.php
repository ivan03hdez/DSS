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
//Route::get('/products{filtrar}', 'ProductController@searchP');
Route::get('/products/{id}', 'ProductController@get');
Route::get('/products/create', function () {
    return view('/users/create');
});
Route::post('/products/create', function () {
    return view('/products/create');
});

Route::get('/users', 'UserController@list');
Route::get('/users/create', function () {
    return view('/users/create');
});
Route::post('/users/create', function () {
    return view('/users/create');
});
Route::get('/users/{id}', 'UserController@get');


Route::get('/promotions', 'PromotionController@list');
Route::get('/promotions/{id}', 'PromotionController@get');
Route::get('/promotions/create', function () {
    return view('/promotions/create');
});
Route::post('/promotions/create', function () {
    return view('/promotions/create');
});


Route::get('/orders', 'OrderController@list');
Route::get('/orders/user/{id}', 'OrderController@filter');
Route::get('/orders/{id}', 'OrderController@get');

Route::get('/orderLines', 'OrderLineController@list');
Route::get('/orderLines/{id}', 'OrderLineController@get');


Route::get('/favoriteLists', 'FavoriteListController@list');
Route::get('/favoriteLists/user/{userId}', 'FavoriteListController@filter');
Route::get('/favoriteLists/{id}', 'FavoriteListController@get');

Route::get('/shoppingCarts', 'ShoppingCartController@list');
Route::get('/shoppingCarts/{id}', 'ShoppingCartController@get');

Route::get('/searchP', 'ProductController@searchP');
Route::get('/searchU', 'UserController@searchU');
Route::get('/searchFL', 'FavoriteListController@searchFL');
Route::get('/searchD', 'PromotionController@searchD');
///////////////////////cada metodo del controlador tiene que tener definida una ruta//////////////

Route::get('/e', 'exampleController@get');

Route::get('/e', function () {return view('/exampleView');});
Route::get('/login', function () {return view('/login');});
Route::get('/signin', function () {return view('/signin');});

