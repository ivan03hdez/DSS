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

//////////////////////////////////////////////////Rutas que usara el administrador/////////////////////////////////////////////////////////
Route::middleware(['admin'])->group(function(){
    Route::get('/products', 'ProductController@list');
    //Route::get('/products{filtrar}', 'ProductController@searchP');
    Route::get('/products/create', function () {
        return view('/products/create');
    });
    Route::post('/products/create', function () {
        return view('/products/create');
    });
    Route::get('/productCreated', 'ProductController@create');
    Route::get('/products/delete/{id}', 'ProductController@delete');
    Route::post('/products/update/{id}', 'ProductController@updateData');
    Route::get('/products/search', 'ProductController@searchP');
    Route::get('/products/update/{id}', 'ProductController@update');
    Route::get('/products/update{}', function () {
        return view('/products/update{}');
    });
    Route::post('/products/update', function () {
        return view('/products/update');
    });
    Route::get('/products/{id}', 'ProductController@get');
    /////////////////////////
    Route::get('/users', 'UserController@list');
    Route::get('/users/create', function () {
        return view('/users/create');
    });
    Route::post('/users/create', function () {
        return view('/users/create');
    });
    Route::post('/users/update/{id}', 'UserController@updateData');
    Route::get('/users/delete/{id}', 'UserController@delete');
    Route::get('/users/update/{id}', 'UserController@update');
    Route::get('/users/search', 'UserController@searchU');
    Route::get('/users/{id}', 'UserController@get');

    Route::get('/userCreated', 'UserController@create');
    /////////////////////////////////////////////////

    Route::get('/promotions', 'PromotionController@list');
    Route::get('/promotions/create', function () {
        return view('/promotions/create');
    });
    Route::post('/promotions/create', function () {
        return view('/promotions/create');
    });
    Route::post('/promotions/update/{id}', 'PromotionController@updateData');
    Route::get('/promotions/update/{id}', 'PromotionController@update');
    Route::get('/promotions/delete/{id}', 'PromotionController@delete');
    Route::get('/promotions/search', 'PromotionController@searchD');
    Route::get('/promotions/{id}', 'PromotionController@get');
    Route::get('/promotionCreated', 'PromotionController@create');
    /////

    Route::get('/orders', 'OrderController@list');
    Route::get('/orders/user/{id}', 'OrderController@filter');
    Route::get('/orders/delete/{id}', 'OrderController@delete');
    Route::get('/orders/search', 'OrderController@searchO');
    Route::get('/orders/{id}', 'OrderController@get');
    ////

    Route::get('/orderLines', 'OrderLineController@list');
    Route::get('/orderLines/delete/{id}', 'OrderLineController@delete');
    Route::get('/orderLines/{id}', 'OrderLineController@get');

    /////

    Route::get('/favoriteLists', 'FavoriteListController@list');
    Route::get('/favoriteLists/user/{userId}', 'FavoriteListController@filter');
    Route::get('/favoriteLists/delete/{id}', 'FavoriteListController@delete');
    Route::get('/favoriteLists/search', 'FavoriteListController@searchFL');
    Route::get('/favoriteLists/{id}', 'FavoriteListController@get');

    ////

    Route::get('/shoppingCarts', 'ShoppingCartController@list');
    Route::get('/shoppingCarts/delete/{id}', 'ShoppingCartController@delete');
    Route::get('/shoppingCarts/{id}', 'ShoppingCartController@get');
});

Auth::routes();
Route::get('/home', 'HomeController@index' )->name('home');


///////////////////////cada metodo del controlador tiene que tener definida una ruta//////////////
//////////////////////////////////////////////////Rutas que usara el usuario normal de la aplicación/////////////////////////////////////////////////////////

Route::get('/e', 'exampleController@get');

Route::get('/e', function () {return view('/exampleView');});
Route::get('/login', function () {return view('/login');});
Route::get('/signin', function () {return view('/signin');});
Route::post('/e', function () {return view('/exampleView');});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
