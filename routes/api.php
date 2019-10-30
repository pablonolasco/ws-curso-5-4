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
//Buyer- Comprandor
Route::resource('buyers','Buyer\BuyerController',['only'=>['index','show']]);
//Category-Categoria
Route::resource('categories','Category\CategoryController',['except'=>['create','edit']]);
//Products
Route::resource('products','Product\ProductController',['only'=>['index','show']]);
//Transaction- Transaciones
Route::resource('transactions','Transaction\TransactionController',['only'=>['index','show']]);
//Sellers- Vendedor
Route::resource('sellers','Seller\SellerController',['only'=>['index','show']]);
//Users-Usuario
Route::resource('users','User\UserController',['except'=>['create','edit']]);
