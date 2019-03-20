<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'cors'], function() {
   Route::get('/products', [
      'uses' => 'API\ProductController@index'
   ]);
   Route::get('/products/{id}', [
      'uses' => 'API\ProductController@show'
   ]);
   
   
   Route::get('/categories', [
      'uses' => 'API\CategoryController@index'
   ]);
   
   Route::get('/latest', [
       'uses' => 'API\ProductController@latest'
    ]);
   
    Route::get('/stores', [
       'uses' => 'API\StoreController@index'
    ]);
   
    Route::get('/stores-products/{id}', [
      'uses' => 'API\StoreController@showProducts'
   ]);
   
   Route::get('/products-category/{id}', [
      'uses' => 'API\ProductController@showCategory'
   ]);
});



 
 
