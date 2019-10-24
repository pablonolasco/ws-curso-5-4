<?php

use Illuminate\Support\Facades\Route;

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
Route::resource('buyers','Buyer/BuyerController',['only'=>['index','show']]);
Route::resource('categories','Category/CategoryController',['except'=>['create','edit']]);
Route::resource('products','Product/ProductController',['only'=>['index','show']]);