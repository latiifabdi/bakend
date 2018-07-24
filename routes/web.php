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

Route::get("/thanks", "ThanksController@index");

Route::resource("/cart", "CartController");

Route::get("/order", "OrderController@index");

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Route::get('/api/products', 'ProductsController@index');
Route::get('/products/{product}', 'HomeController@show');

Route::get('/{id?}', 'HomeController@index');



